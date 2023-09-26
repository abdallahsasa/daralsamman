<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Author\Auditor;
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
        $products = Product::where('status', 'active')->paginate(12);
        $categories = Category::where('status', 'active')
            ->orderBy('name', 'asc')
            ->get();
        $authors = Author::Where('status', 'active')
            ->orderBy('slug', 'asc')
            ->get();
        $auditors = Auditor::Where('status', 'active')
            ->orderBy('slug', 'asc')
            ->get();

        return view('website.products.index', compact('categories', 'products', 'authors','auditors'));


    }


    /**
     * Show the form for creating a new resource.
     */

    public function details($id)
    {
        $product = Product::where('status', 'active')->findOrFail($id);


        $categories = Category::where('status', 'active')->get();

        $relatedProducts = Product::where('status', 'active')
            ->where('id', "!=", $id)
            ->get()->random(5);

// Return the view with the data
        return view('website.products.details', compact('categories', 'product', 'relatedProducts'));

    }

    public function categoryProducts($cateoryid)
    {
        $products = Product::where('status', 'active')
            ->where('category_id',$cateoryid)
            ->paginate(12);
        $categories = Category::where('status', 'active')
            ->orderBy('name', 'asc')
            ->get();
        $authors = Author::Where('status', 'active')
            ->orderBy('slug', 'asc')
            ->get();


        return view('website.products.index', compact('categories', 'products', 'authors'));
    }
    public function authorProducts($authorid)
    {
        $products = Author::findOrFail($authorid)
            ->products()
            ->where('status', 'active')
            ->paginate(12);
        $categories = Category::where('status', 'active')
            ->orderBy('name', 'asc')
            ->get();
        $authors = Author::Where('status', 'active')
            ->orderBy('slug', 'asc')
            ->get();

        return view('website.products.index', compact('categories', 'products', 'authors'));
    }

    public function auditorProducts($authorid)
    {
        $products = Auditor::findOrFail($authorid)
            ->products()
            ->where('status', 'active')
            ->paginate(12);
        $categories = Category::where('status', 'active')
            ->orderBy('name', 'asc')
            ->get();
        $auditors = Auditor::Where('status', 'active')
            ->orderBy('slug', 'asc')
            ->get();

        return view('website.products.index', compact('categories', 'products', 'auditors'));
    }

}
