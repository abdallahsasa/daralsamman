<?php

namespace App\Http\Controllers\dashboard\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Product\Category;
use App\Models\UserActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    private $index_view;
    private $create_view;
    private $edit_view;
    private $show_view;
    private $success_message;
    private $error_message;


    public function __construct()
    {
        $this->model_instance = Category::class;
        $this->index_view = 'dashboard.categories.index';
        $this->create_view = 'dashboard.categories.create';
        $this->show_view = 'dashboard.categories.show';
        $this->edit_view = 'dashboard.categories.edit';


        $this->success_message = 'Category created successfully';
        $this->error_message = "Failed to create Category.";
        $this->delete_message = 'Category deleted successfully';
        $this->error = 'Something went Wrong';
        $this->update_success_message = 'Category Updated successfully';

        $this->update_error_message = "Category Couldn't Been Updated";

    }

    public function index()
    {

        $categories = $this->model_instance::all();

        return view($this->index_view, compact(['categories']));


    }

    public function create()
    {
        $categories = Category::all();
        return view($this->create_view, compact(['categories']));
    }


    public function store(StoreProductCategoryRequest $request)
    {
        $validated_data = $request->validated();

        try {
            $object = $this->model_instance::create(Arr::except($validated_data, ['image']));

            $object->sort_number = $object->id;

            if ($request->has('image')) {
                $image = $validated_data["image"];
                $img_file_path = Storage::disk('public_images')->put('categories', $image);
                $image_name = $request->file('image')->getClientOriginalName();
                $image_url = getMediaUrl($img_file_path);
                $object->image_url = $image_url;
                $object->image_name = $image_name;
                $object->update();
            }

            $log_message = trans('categories.create_log') . '#' . $object->id;
//            UserActivity::logActivity($log_message);

            return redirect()->route($this->create_view, $object->id)->with('success', $this->success_message);
        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
            return redirect()->route($this->create_view)->with('error', $this->error_message);
        }
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $category = $this->model_instance::findOrFail($id);
        $categories = $this->model_instance::all();
        return view($this->edit_view, compact(['category', 'categories']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, string $id)
    {
        $validated_data = $request->validated();
//        dd($validated_data);
        try {
            DB::beginTransaction();
            $object = $this->model_instance::findOrFail($id);
            $object->update(Arr::except($validated_data, ['image']));

            if ($request->has('image')) {

                // Delete the old main image
                Storage::disk('public_images')->delete($object->image_url);

                $image = $request->file('image');
                $img_file_path = Storage::disk('public_images')->put('categories', $image);
                $image_name = $image->getClientOriginalName();
                $image_url = getMediaUrl($img_file_path);
                $object->image_name = $image_name;
                $object->image_url = $image_url;
            }

            $object->save();
            DB::commit();

            return redirect()->route($this->index_view)->with('success', $this->update_success_message);


        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
            return redirect()->route($this->edit_view, $object->id)->with('error', $ex->getMessage());
//            return redirect()->route($this->edit_view,$object->id)->with('error', $this->update_error_message);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
