<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Author\Author;
use App\Models\Product\Category;
use App\Models\Product\Product;
use App\Models\Supplier\Supplier;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Illuminate\Support\Facades\URL;

class AboutUsPageController extends Controller
{
    use SEOToolsTrait;
    public function index()
    {
        $numberOfProducts = Product::where('status', 'active')->count();
        $numberOfCategories = Category::where('status', 'active')->count();
        $numbOfAuthors = Author::where('status', 'active')->count();
        $numbOfSuppliers = Supplier::where('status', 'active')->count();

        $this->seo()->setTitle('نبذة عن تأسيس دار السّمان');
        // $this->seo()->setDescription($category->meta_title);
        $this->seo()->opengraph()->setUrl(Url::current());
        $this->seo()->opengraph()->addProperty('type', 'articles');
        // $this->seo()->twitter()->setSite($category->name);
        $this->seo()->jsonLd()->setType('Article');






        return view('website.about' ,compact('numberOfProducts','numberOfCategories','numbOfAuthors','numbOfSuppliers'));
    }
}
