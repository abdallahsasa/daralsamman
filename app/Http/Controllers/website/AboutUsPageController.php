<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Author\Author;
use App\Models\Product\Category;
use App\Models\Product\Product;
use App\Models\Supplier\Supplier;
use Illuminate\Http\Request;

class AboutUsPageController extends Controller
{
    public function index()
    {
        $numberOfProducts = Product::where('status', 'active')->count();
        $numberOfCategories = Category::where('status', 'active')->count();
        $numbOfAuthors = Author::where('status', 'active')->count();
        $numbOfSuppliers = Supplier::where('status', 'active')->count();


        return view('website.about' ,compact('numberOfProducts','numberOfCategories','numbOfAuthors','numbOfSuppliers'));
    }
}
