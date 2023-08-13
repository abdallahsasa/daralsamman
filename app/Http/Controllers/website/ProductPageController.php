<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Product\Category;
use App\Models\Product\Product;
use App\Models\Product\ProductMedia;

class ProductPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $products = Product::where('status', 'active');
//
//        if ($category !== 'all') {
//            $categoryId = Category::where('slug', $category)->value('id');
//            $products->where('category_id', $categoryId);
//        }
//
//        $products = $products->get();
//        $productsFeaturedImage = ProductMedia::where('product_id', $products->pluck('id'))
//            ->where('is_featured', true)
//            ->get();
//        $category = Category::where('slug', $category)->value('name');
//        $categories = Category::where('status', 'active')->get();

//        return view('website.products.index', compact('categories', 'products', 'category','productsFeaturedImage'));
        return view ('website.products.index');


    }


    /**
     * Show the form for creating a new resource.
     */

    public function details($id)
    {
        $product = Product::where('status', 'active')->findOrFail($id);

        $category = Category::where('status', 'active')->findOrFail($product->category_id);

        $categories = Category::where('status', 'active')->get();

        $relatedProducts = Product::where('status', 'active')
            ->where('id', "!=", $id)
            ->get();

// Return the view with the data
        return view('website.products.show', compact('categories', 'product', 'category','relatedProducts'));

    }


}
