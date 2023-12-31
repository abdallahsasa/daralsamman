<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Author\Auditor;
use Illuminate\Http\Request;

class AuditorPageController extends Controller
{
    public function __construct()
    {
        $this->model_instance = Auditor::class;

        $this->index_view = 'website.auditors.index';
    }
    public function index()
    {
        $auditors = $this->model_instance::where('status', 'active')->get();

        return view($this->index_view, compact('auditors'));
    }
}
