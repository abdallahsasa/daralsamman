<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Author\Author;
use App\Models\Product\Category;
use App\Models\Product\Product;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $products = Product::where('status', 'active')
            ->where('featured', 1)
            ->get();

        $categories = Category::where('status', 'active')
            ->where('featured', 1)
            ->get();

        $numberOfProducts = Product::where('status', 'active')->count();
        $numberOfCategories = Category::where('status', 'active')->count();
        $numbOfAuthors = Author::where('status', 'active')->count();

        return view('website.home', compact('products', 'categories', 'numberOfProducts', 'numberOfCategories','numbOfAuthors'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function details()
    {
        return view('website.products.show');
    }
}
