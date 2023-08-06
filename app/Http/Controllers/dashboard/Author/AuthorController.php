<?php

namespace App\Http\Controllers\dashboard\Author;

use App\Http\Controllers\Controller;
use App\Models\Author\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    private $index_view;
    private $create_view;
    private $show_view;
    private $edit_view;

    private $success_message;
    private $error_message;


    public function __construct()
    {
        $this->model_instance = Author::class;
        $this->index_view = 'dashboard.author.index';
        $this->create_view = 'dashboard.author.create';
        $this->show_view = 'dashboard.author.show';
        $this->edit_view = 'dashboard.author.edit';


        $this->success_message = 'Author created successfully';
        $this->error_message = "Failed to create Author.";

        $this->update_success_message = 'Author updated successfully!';
        $this->update_error_message = "Unfortunately, the Author could not be updated";

        $this->delete_message = 'Author deleted successfully';
        $this->error = 'Something went Wrong';
    }




    public function index()
    {
        $authors = $this->model_instance::all();

        return view($this->index_view, compact(['authors']));
    }

    public function create()
    {
        return view($this->create_view);
    }

    Public function store()
    {

    }
}
