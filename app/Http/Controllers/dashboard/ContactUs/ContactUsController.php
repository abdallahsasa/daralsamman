<?php

namespace App\Http\Controllers\dashboard\ContactUs;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactUsRequest;
use App\Http\Requests\UpdateContactUsRequest;
use App\Models\Contact\Message;
use App\Models\Contact\Subject;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function __construct()
    {
        $this->model_instance = Message::class;

        $this->index_view = 'dashboard.contact-us.index';
        $this->create_view = 'dashboard.contact-us.subject';
        $this->show_view = 'dashboard.contact-us.show';
        $this->edit_view = 'dashboard.contact-us.edit';

        $this->index_route = 'dashboard.contact-us.index';
        $this->create_route = 'dashboard.contact-us.create';

        $this->success_message = 'Subject created successfully';
        $this->error_message = "Failed to create Subject.";

        $this->update_success_message = trans('admin.update_created_successfully');
        $this->update_error_message = trans('admin.fail_while_update');

    }

    public function index()
    {
        $messages = $this->model_instance::all();

        return view($this->index_view, compact('messages'));
    }

    public function createSubject()
    {
        $subjects = Subject::all();

        $messages = $this->model_instance::all();

        return view($this->create_view, compact('subjects'));
    }

    public function store(StoreContactUsRequest $request)
    {
        $validated_data = $request->validated();
        try {
            $object = Subject::create(Arr::except($validated_data, []));

//            $log_message = trans('categories.create_log') . '#' . $object->id;
//            UserActivity::logActivity($log_message);

            return redirect()->route('dashboard.contact-us.create', $object->id)->with('success', $this->success_message);
        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
            return redirect()->route('dashboard.contact-us.create')->with('error', $this->error_message);
        }

    }

    public function destroySubject($subjectId)
    {
        try {
            DB::beginTransaction();

            // Find the product
            $subject = Subject::findOrFail($subjectId);


            // Delete the product
            $subject->delete();

            DB::commit();

            return response()->json(['message' => 'Subject deleted successfully'], 200);


        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'Failed to delete Subject.'], 500);
        }
    }


}
