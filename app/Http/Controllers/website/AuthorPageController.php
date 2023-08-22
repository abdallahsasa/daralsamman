<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Author\Author;
use Illuminate\Http\Request;

class AuthorPageController extends Controller
{
    public function __construct()
    {
        $this->model_instance = Author::class;

        $this->index_view = 'website.authors.index';
    }
    public function index()
    {
        $authors = $this->model_instance::all();

        return view($this->index_view, compact('authors'));
    }
}
