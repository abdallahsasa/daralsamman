<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactUsRequest;
use App\Models\Contact\Message;
use App\Models\Contact\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Illuminate\Support\Facades\URL;


class ContactUsPageController extends Controller
{
    use SEOToolsTrait;

    public function __construct()
    {
        $this->model_instance = Message::class;

        $this->index_view = 'website.contact';


        $this->index_route = 'website.contact';

        $this->success_message = 'شكراً لتواصلكم معنا.
تم إستلام رسالتكم وسيتم الرد عليكم بأقرب وقت.';
        $this->error_message = "فشل في إرسال رسالة ، يمكنك المحاولة مرة أخرى";

    }


    public function index()
    {
        $subjects = Subject::all();

        $this->seo()->setTitle('تواصل معنا');
        // $this->seo()->setDescription($category->meta_title);
        $this->seo()->opengraph()->setUrl(Url::current());
        $this->seo()->opengraph()->addProperty('type', 'articles');
        // $this->seo()->twitter()->setSite($category->name);
        $this->seo()->jsonLd()->setType('Article');


        return view($this->index_view, compact('subjects'));
    }


    public function store(Request $request)
    {
//        $validated_data = $request->validated();
        $validated_data = $request->validate([
            'name' => 'required|string',
            'number' => 'required|digits:10',
            'email' => 'required|email',
            'subject_id' => 'required|exists:messages_subject,id',
            'message' => 'required|string',
        ]);

        try {
            $this->model_instance::create(Arr::except($validated_data, []));

//            $log_message = trans('categories.create_log') . '#' . $object->id;
//            UserActivity::logActivity($log_message);

            return redirect()->route($this->index_route)->with('success', $this->success_message);
        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
            return redirect()->route($this->index_route)->with('error', $this->error_message);
        }

    }

}
