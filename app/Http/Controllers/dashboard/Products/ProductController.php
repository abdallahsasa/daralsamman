<?php

namespace App\Http\Controllers\dashboard\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product\Category;
use App\Models\Product\Product;
use App\Models\Product\ProductMedia;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use function PHPUnit\Framework\isEmpty;

//use App\Models\UserActivity;


class ProductController extends Controller
{

    private $index_view;
    private $create_view;
    private $show_view;
    private $edit_view;
//    private $edit_variation_view;

//    private $index_route;
//    private $model_instance;
    private $success_message;
    private $error_message;
//    private $update_success_message;
//    private $update_error_message;

    public function __construct()
    {
        $this->model_instance = Product::class;
        $this->index_view = 'dashboard.products.index';
        $this->create_view = 'dashboard.products.create';
        $this->show_view = 'dashboard.products.show';
        $this->edit_view = 'dashboard.products.edit';
        $this->update_view = 'dashboard.product.edit';

        $this->create_route='dashboard.product.create';


        $this->success_message = 'Product created successfully';
        $this->error_message = "Failed to create product.";

        $this->update_success_message = 'Product updated successfully!';
        $this->update_error_message = "Unfortunately, the product could not be updated";

        $this->delete_message = 'Product deleted successfully';
        $this->error = 'Something went Wrong';


    }

    public function index()
    {
        $filter = request()->has('filter') ? request()->filter : 'all';


        if ($filter == "all") {
            $products = $this->model_instance::all()->sortBy('id');
        } else
            $products = $this->model_instance::all()->sortBy('id');

        $categories = Category::where('status', '=', 'active')->get();


        return view($this->index_view, compact(['products', 'categories', 'filter']));
    }

    public function getProductsData(Request $request)
    {

        if ($request->ajax()) {
            $products = Product::with('category')->get();

            return DataTables::of($products)
                ->addColumn('status', function ($product) {
                    $statusClass = $product->status == 'active' ? 'text-success' : 'text-danger';
                    return '<span class="' . $statusClass . '">' . $product->status . '</span>';
                })
                ->addColumn('image', function ($product) {
                    return '<img class="image-20" src="' . $product->image_url . '">';
                })
                ->addColumn('action', function ($product) {
                    $editUrl = route('dashboard.product.edit', $product->id);
                    $deleteUrl = route('dashboard.product.destroy', $product->id);
                    $deleteConfirmation = "return confirm('Are you sure you want to delete this " . $product->name . "');";

                    return '<div class="row">
                                <a class="pe-2" href="' . $editUrl . '"><i class="fa fa-pencil"></i></a>
                                <form method="POST" action="' . $deleteUrl . '">
                                    ' . csrf_field() . '
                                    ' . method_field('DELETE') . '
                                    <button class="fa fa-trash-o text-danger" onclick="' . $deleteConfirmation . '"></button>
                                </form>
                            </div>';
                })
                ->rawColumns(['status', 'image', 'action'])
                ->make(true);
        }

        return abort(403);
    }


    public function create()
    {
        // Fetch categories for dropdown
        $categories = Category::where('status', '=', 'active')->get();

        return view($this->create_view, compact('categories'));
    }


    public function store(StoreProductRequest $request)
    {
        $validated_data = $request->validated();

        try {

            DB::beginTransaction();
            $object = $this->model_instance::create(Arr::except($validated_data, ['image', 'gallery']));
            $object->sort_number = $object->id;

            if ($request->hasFile('gallery')) {
                $productImages = $request->file('gallery');
                if (is_array($productImages)) {
                    foreach ($productImages as $image) {
                        $img_file_path = Storage::disk('public_images')->put('products', $image);
                        $image_name = $image->getClientOriginalName();
                        $image_url = getMediaUrl($img_file_path);

                        $object->media()->create([
                            'image_url' => $image_url,
                            'image_name' => $image_name,
                            'is_featured' => 'false',
                        ]);
                    }
                }
            }
            if ($request->has('image')) {
                $image=$request->file('image');
                $img_file_path = Storage::disk('public_images')->put('products', $image);
                $image_name = $image->getClientOriginalName();
                $image_url = getMediaUrl($img_file_path);
                $object->media()->create([
                    'image_url' => $image_url,
                    'image_name' => $image_name,
                    'is_featured' => 'true',
                ]);
            }


            if ($request->has('attributes')) {
                foreach ($request->get('attributes') as $attribute) {
                    $object->attributes()->create([
                        'name' => $attribute['name'],
                        'value' => $attribute['value'],
                    ]);
                }
            }


            if ($request->has('product_tags')) {
                $tags = json_decode($request->get('product_tags'));
                foreach ($tags as $tag) {
                    $arrayTags[] = ['value' => $tag->value];
                }
                $arrayTags = collect($arrayTags)->toArray();
                foreach ($arrayTags as $tag) {
                    $object->tags()->create([
                        'tag' => $tag['value']
                    ]);
                }
            }


            $object->save();
            DB::commit();

//            $log_message = trans('products.create_log') . '#' . $object->id;
//            UserActivity::logActivity($log_message);

            return redirect()->route($this->create_route, $object->id)->with('success', $this->success_message);
        } catch (\Exception $ex) {

//            Log::error($ex->getMessage());
            return redirect()->route($this->create_route)->with('error', $this->error_message);
//            return redirect()->route($this->create_view)->with('error', $ex->getMessage());
        }

    }


    public function show(string $id)
    {
        $product = Product::findOrFail($id);

        return view($this->show_view, compact('product'));
    }


    public function edit(string $productId)
    {
        $product = Product::findOrFail($productId);

        $categories = Category::all();

        return view($this->edit_view, compact('product', 'categories'));
    }

    private function UpdateValidationRules()
    {
        return [
            'category_id' => 'required|exists:product_categories,id',
            'name' => 'required|string|min:3|max:200',
            'slug' => 'required|string|min:3|max:200',
            'sku' => 'required|string|min:3|max:200',
            'short_description' => 'required|string|min:3',
            'description' => 'required|string|min:3',
            'prices' => 'nullable|numeric',
            'status' => 'required|in:active,inactive',

            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',

            'image' => 'nullable',
            'image.*' => 'required|image|mimes:jpg,jpeg,png,webp',

            'product_tags'=>'nullable|string',

            'gallery' => 'nullable|array',
            'gallery.*' => 'image|mimes:jpg,jpeg,png,webp',

            'attributes' => 'array',
            'attributes.*.name' => 'required|string',
            'attributes.*.value' => 'required|string',

        ];
    }
    public function update(Request $request, $id)
    {
           $validated_data = $request->validate($this->UpdateValidationRules());
           // DB::beginTransaction();
        dd($validated_data);
            $object = $this->model_instance::findOrFail($id);

            // Update the product details except for the images and gallery
            $object->update(Arr::except($validated_data, ['image', 'gallery']));
            // Update the images
            if ($request->hasFile('gallery') && !empty( $validated_data['gallery']) ) {
                $productImages = $request->file('gallery');
                if (is_array($productImages)) {

                    foreach ($productImages as $image) {
                        $img_file_path = Storage::disk('public_images')->put('products', $image);
                        $image_name = $image->getClientOriginalName();
                        $image_url = getMediaUrl($img_file_path);

                        $object->media()->create([
                            'image_url' => $image_url,
                            'image_name' => $image_name,
                        ]);
                    }
                }
            }

            // Update the main image
            if ($request->hasFile('image') && $request['image']!=null) {
                // Delete the old main image
                $url = $object->image_url;
                $filePath = str_replace(url('/'), '', $url);
                Storage::disk('public_images')->delete($filePath);

                $img_file_path = Storage::disk('public_images')->put('products', $image);
                $image_name = $image->getClientOriginalName();
                $image_url = getMediaUrl($img_file_path);

                $object->image_url = $image_url;
                $object->image_name = $image_name;
            }

            // Update the attributes
            if ($request->has('attributes')) {
                $object->attributes()->delete();
                foreach ($request->get('attributes') as $attribute) {
                    $object->attributes()->create([
                        'name' => $attribute['name'],
                        'value' => $attribute['value'],
                    ]);
                }
            }

            // Update the product tags
            if ($request->has('product_tags')) {
                $object->tags()->delete();
                $tags = json_decode($request->get('product_tags'));
                foreach ($tags as $tag) {
                    $arrayTags[] = ['value' => $tag->value];
                }
                $arrayTags = collect($arrayTags)->toArray();
                foreach ($arrayTags as $tag) {
                    $object->tags()->create([
                        'tag' => $tag['value']
                    ]);
                }
            }

            $object->save();
            //DB::commit();

            // You can uncomment this if you have UserActivity implemented
            // $log_message = trans('products.update_log') . '#' . $object->id;
            // UserActivity::logActivity($log_message);

            return redirect()->route($this->update_view, $object->id)->with('success', $this->update_success_message);

    }



    public function destroy($productId)
    {
        try {
            DB::beginTransaction();

            // Find the product
            $product = Product::findOrFail($productId);

            // Delete the product attributes
            $product->attributes()->delete();

            // Delete the product images
            $product->images()->delete();

            // Delete the product
            $product->delete();

            DB::commit();

            return response()->json(['message' => 'Product deleted successfully'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'Failed to delete product.'], 500);
        }
    }

    public function deleteImage($mediaId){

        $mediaItem = ProductMedia::findOrFail($mediaId);
        $url = $mediaItem->image_url;
        $filePath = str_replace(url('/'), '', $url);

        if (Storage::disk('public_images')->delete($filePath)) {
            $mediaItem->image_name = 'no image';
            $mediaItem->image_url = asset('/images/noimage.jpg');
            $mediaItem->save();
            return response()->json([
                'success' => 'Image deleted successfully!',
            ]);
        }
        else{
            return response()->json([
                'error' => 'Something went wrong',
            ]);
        }
    }
}
