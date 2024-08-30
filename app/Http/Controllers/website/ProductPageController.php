<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Author\Auditor;
use App\Models\Author\Author;
use App\Models\Product\Category;
use App\Models\Product\Product;
use App\Models\Product\ProductMedia;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Illuminate\Support\Facades\URL;


class ProductPageController extends Controller
{
    use SEOToolsTrait;
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

        $this->seo()->setTitle($product->name);
        $this->seo()->setDescription($product->meta_title);
        $this->seo()->opengraph()->setUrl(Url::current());
        $this->seo()->opengraph()->addProperty('type', 'articles');
        $this->seo()->twitter()->setSite($product->name);
        $this->seo()->jsonLd()->setType('Article');

        $categories = Category::where('status', 'active')->get();

        $relatedProducts = Product::where('status', 'active')
            ->where('id', "!=", $id)
            ->get()->random(5);

        return view('website.products.details', compact('categories', 'product', 'relatedProducts'));

    }


    public function detailss($id)
    {

        $product = Product::where('status', 'active')->findOrFail($id);

        $this->seo()->setTitle($product->name);
        $this->seo()->setDescription($product->meta_title);
        $this->seo()->opengraph()->setUrl(Url::current());
        $this->seo()->opengraph()->addProperty('type', 'articles');
        $this->seo()->twitter()->setSite($product->name);
        $this->seo()->jsonLd()->setType('Article');
        $categories = Category::where('status', 'active')->get();

        $relatedProducts = Product::where('status', 'active')
            ->where('id', "!=", $id)
            ->get()->random(5);

        return view('website.products.new', compact('categories', 'product', 'relatedProducts'));

    }


    public function categoryProducts($cateoryid)
    {
        $category=Category::findOrFail($cateoryid);
        $this->seo()->setTitle($category->name);
        $this->seo()->setDescription($category->meta_title);
        $this->seo()->opengraph()->setUrl(Url::current());
        $this->seo()->opengraph()->addProperty('type', 'articles');
        $this->seo()->twitter()->setSite($category->name);
        $this->seo()->jsonLd()->setType('Article');
        $products = Product::select('products.*')
            ->distinct()
            ->join('product_categories', 'products.category_id', '=', 'product_categories.id')
            ->where(function ($query) use ($cateoryid) {
                $query->where('product_categories.id', $cateoryid)
                    ->orWhere('product_categories.parent_id', $cateoryid);
            })
            ->where('products.status', 'active')
            ->paginate(12);

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
        $auditors = Auditor::Where('status', 'active')
            ->orderBy('slug', 'asc')
            ->get();

        return view('website.products.index', compact('categories', 'products', 'authors','auditors'));
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
        $authors = Author::Where('status', 'active')
            ->orderBy('slug', 'asc')
            ->get();
        $auditors = Auditor::Where('status', 'active')
            ->orderBy('slug', 'asc')
            ->get();

        return view('website.products.index', compact('categories', 'products','authors', 'auditors'));
    }

}
