<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Author\Auditor;
use App\Models\Author\Author;
use App\Models\Product\Category;
use App\Models\Product\Product;
use App\Models\Supplier\Supplier;
use Illuminate\Http\Request;

class FrontPageController extends Controller
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
        $numbOfAuditors = Auditor::where('status', 'active')->count();

        return view('website.home', compact('products', 'categories', 'numberOfProducts', 'numberOfCategories','numbOfAuthors','numbOfAuditors'));
    }
    public function suppliersIndex()
    {
        $supliers=Supplier::where('status','active')
            ->get();
        return view('website.suppliers.index', compact('supliers'));

    }

    /**
     * Show the form for creating a new resource.
     */

    public function details()
    {
        return view('website.products.show');
    }
}
