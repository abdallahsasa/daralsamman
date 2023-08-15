<?php

namespace App\Http\Controllers\dashboard\ContactUs;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactUsRequest;
use App\Http\Requests\UpdateContactUsRequest;
use App\Models\Contact\Message;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function __construct()
    {
        $this->model_instance = Message::class;

        $this->index_view = 'dashboard.contact-us.index';
        $this->create_view = 'dashboard.contact-us.create';
        $this->show_view = 'dashboard.contact-us.show';
        $this->edit_view = 'dashboard.contact-us.edit';

        $this->index_route = 'dashboard.contact-us.index';
        $this->create_route = 'dashboard.contact-us.create';

        $this->success_message = 'Thank You For Contacting Us Your Message Has Received';
        $this->update_success_message = trans('admin.update_created_successfully');
        $this->error_message = "Your Message Couldn't Be Send" ;
        $this->update_error_message = trans('admin.fail_while_update');

    }

    public function index()
    {
        $messages = $this->model_instance::all();

        return view($this->index_view ,compact('messages'));
    }

    public function createSubject()
    {
        return view($this->create_view);
    }

    public function store(StoreContactUsRequest $request)
    {

    }

    public function edit($id)
    {

    }

    public function update(UpdateContactUsRequest $request,$id)
    {

    }

}
