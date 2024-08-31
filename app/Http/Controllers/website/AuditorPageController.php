<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Author\Auditor;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Illuminate\Support\Facades\URL;


class AuditorPageController extends Controller
{
    use SEOToolsTrait;


    public function __construct()
    {
        $this->model_instance = Auditor::class;

        $this->index_view = 'website.auditors.index';
    }
    public function index()
    {
        $auditors = $this->model_instance::where('status', 'active')->get();

        $this->seo()->setTitle('المحققون');
        // $this->seo()->setDescription($category->meta_title);
        $this->seo()->opengraph()->setUrl(Url::current());
        $this->seo()->opengraph()->addProperty('type', 'articles');
        // $this->seo()->twitter()->setSite($category->name);
        $this->seo()->jsonLd()->setType('Article');

        return view($this->index_view, compact('auditors'));
    }
}
