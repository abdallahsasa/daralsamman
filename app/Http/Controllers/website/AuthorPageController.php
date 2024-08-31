<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Author\Author;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Illuminate\Support\Facades\URL;


class AuthorPageController extends Controller
{
    use SEOToolsTrait;

    public function __construct()
    {
        $this->model_instance = Author::class;

        $this->index_view = 'website.authors.index';
    }
    public function index()
    {
        $authors = $this->model_instance::where('status', 'active')->get();

        $this->seo()->setTitle('المؤلفون');
        // $this->seo()->setDescription($category->meta_title);
        $this->seo()->opengraph()->setUrl(Url::current());
        $this->seo()->opengraph()->addProperty('type', 'articles');
        // $this->seo()->twitter()->setSite($category->name);
        $this->seo()->jsonLd()->setType('Article');

        return view($this->index_view, compact('authors'));
    }
}
