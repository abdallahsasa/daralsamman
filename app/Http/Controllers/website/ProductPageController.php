<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Author\Author;
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
        $products = Product::where('status', 'active')->get();
        $categories = Category::where('status', 'active')
            ->orderBy('name', 'asc')
            ->get();
        $authors = Author::Where('status','active')
            ->orderBy('slug', 'asc')
            ->get();

        return view ('website.products.index',compact('categories','products','authors'));


    }


    /**
     * Show the form for creating a new resource.
     */

    public function details($id)
    {
        $product = Product::where('status', 'active')->findOrFail($id);

//        $category = Category::where('status', 'active')->findOrFail($product->category_id);

        $categories = Category::where('status', 'active')->get();

        $relatedProducts = Product::where('status', 'active')
            ->where('id', "!=", $id)
            ->get();

// Return the view with the data
        return view('website.products.details', compact('categories', 'product','relatedProducts'));

    }


}
