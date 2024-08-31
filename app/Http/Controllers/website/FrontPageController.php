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

use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Illuminate\Support\Facades\URL;

class FrontPageController extends Controller
{
    use SEOToolsTrait;

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
    public function search(Request $request)
    {
        $key=$request->input('key');
        $categoryid=$request->input('category');
        $productsQuery = Product::where('status', 'active')
            ->where('name', 'LIKE', "%{$key}%");
       // Add category condition only if $categoryid is not 'all'
        if ($categoryid !== 'all') {
            $productsQuery = $productsQuery->where('category_id', 'LIKE', "%{$categoryid}%");
        }
        $products = $productsQuery->paginate(12);
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
    public function suppliersIndex()
    {

        $this->seo()->setTitle('الموزعون المعتمدون');
        // $this->seo()->setDescription($category->meta_title);
        $this->seo()->opengraph()->setUrl(Url::current());
        $this->seo()->opengraph()->addProperty('type', 'articles');
        // $this->seo()->twitter()->setSite($category->name);
        $this->seo()->jsonLd()->setType('Article');


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

        $this->seo()->setTitle('اللجنة العلمية');
        // $this->seo()->setDescription($category->meta_title);
        $this->seo()->opengraph()->setUrl(Url::current());
        $this->seo()->opengraph()->addProperty('type', 'articles');
        // $this->seo()->twitter()->setSite($category->name);
        $this->seo()->jsonLd()->setType('Article');

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
