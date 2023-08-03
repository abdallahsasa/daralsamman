<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $products = Product::where('status', 'active');


        return view('website.home');
    }

    /**
     * Show the form for creating a new resource.
     */

    public function details()
    {
        return view('website.products.show');
    }
}
