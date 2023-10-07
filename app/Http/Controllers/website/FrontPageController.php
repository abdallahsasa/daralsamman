<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Author\Auditor;
use App\Models\Author\Author;
use App\Models\Product\Category;
use App\Models\Product\Product;
use App\Models\Supplier\Country;
use App\Models\Supplier\Supplier;
use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function index()
    {
        $products = Product::where('status', 'active')
            ->where('featured', 1)
            ->get();

        $FeaturedCategories = Category::where('status', 'active')
            ->where('featured', 1)
            ->get();

        $numberOfProducts = Product::where('status', 'active')->count();
        $numberOfCategories = Category::where('status', 'active')->count();
        $numbOfAuthors = Author::where('status', 'active')->count();
        $numbOfSuppliers = Supplier::where('status', 'active')->count();

        return view('website.home', compact('products', 'FeaturedCategories', 'numberOfProducts', 'numberOfCategories','numbOfAuthors','numbOfSuppliers'));
    }
    public function suppliersIndex()
    {
        $suppliers=Supplier::where('status','active')
            ->get();
        $countries = Country::where('status', 'active')
            ->withCount('cities') // Count the number of cities for each country
            ->orderByDesc('cities_count') // Sort by the cities_count column in descending order
            ->get();

        return view('website.suppliers.index', compact('suppliers','countries'));
    }

    public function scientificIndex()
    {
        return view('website.scientific.index');
    }

    /**
     * Show the form for creating a new resource.
     */

    public function details()
    {
        return view('website.products.show');
    }
}
