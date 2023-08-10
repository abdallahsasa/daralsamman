<?php

namespace App\Http\Controllers\dashboard\Author;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use App\Models\Author\Author;
use App\Models\Product\Category;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AuthorController extends Controller
{
    private $index_view;
    private $create_view;
    private $show_view;
    private $edit_view;

    private $success_message;
    private $error_message;


    public function __construct()
    {
        $this->model_instance = Author::class;
        $this->index_view = 'dashboard.author.index';
        $this->create_view = 'dashboard.author.create';
        $this->show_view = 'dashboard.author.show';
        $this->edit_view = 'dashboard.author.edit';


        $this->success_message = 'Author created successfully';
        $this->error_message = "Failed to create Author.";

        $this->update_success_message = 'Author updated successfully!';
        $this->update_error_message = "Unfortunately, the Author could not be updated";

        $this->delete_message = 'Author deleted successfully';
        $this->error = 'Something went Wrong';
    }


    public function index()
    {
        $authors = $this->model_instance::all();

        return view($this->index_view, compact(['authors']));
    }

    public function create()
    {
        return view($this->create_view);
    }

    public function store(StoreAuthorRequest $request)
    {

        $validated_data = $request->validated();
        try {
            $object = $this->model_instance::create(Arr::except($validated_data, ['image']));
            $object->sort_number = $object->id;

            if ($request->has('image')) {
                $image = $validated_data["image"];
                $img_file_path = Storage::disk('public_images')->put('Author', $image);
                $image_name = $request->file('image')->getClientOriginalName();
                $image_url = getMediaUrl($img_file_path);
                $object->image_url = $image_url;
                $object->image_name = $image_name;
                $object->update();
            }

//            $log_message = trans('categories.create_log') . '#' . $object->id;
//            UserActivity::logActivity($log_message);

            return redirect()->route($this->index_view, $object->id)->with('success', $this->success_message);
        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
            return redirect()->route($this->create_view)->with('error', $this->error_message);
        }

    }

    public function edit($id)
    {
        $author = $this->model_instance::findOrFail($id);
        return view($this->edit_view, compact('author'));
    }

    public function update(UpdateAuthorRequest $request, $id)
    {
        return $request;
        $validated_data = $request->validated();

        try {
            DB::beginTransaction();
            $object = $this->model_instance::findOrFail($id);
            // Update the product details except for the images and gallery
            $object->update(Arr::except($validated_data, ['image']));

            if ($request->has('image')) {

                // Delete the old main image
                Storage::disk('public_images')->delete($object->image_url);

                $image = $request->file('image');
                $img_file_path = Storage::disk('public_images')->put('Author', $image);
                $image_name = $image->getClientOriginalName();
                $image_url = getMediaUrl($img_file_path);
                $object->image_name= $image_name;
                $object->image_url = $image_url;
                $object->update();
            }

            DB::commit();

            // You can uncomment this if you have UserActivity implemented
            // $log_message = trans('products.update_log') . '#' . $object->id;
            // UserActivity::logActivity($log_message);
            return redirect()->route($this->edit_view, $object->id)->with('success', $this->update_success_message);

        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
            return redirect()->route($this->edit_view, $object->id)->with('error', $ex->getMessage());
//            return redirect()->route($this->edit_view, $object->id)->with('error', $this->update_error_message);

        }

    }
}
