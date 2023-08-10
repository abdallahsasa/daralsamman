<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAuditorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|string|min:3|max:200',
            'middle_name' => 'nullable|string|min:3|max:200',
            'last_name' => 'required|string|min:3|max:200',
            'slug' => 'required|string|min:3|max:20',
            'date_of_birth' => 'nullable|date',
            'gender' => 'required|in:male,female',
            'number' => ['nullable', 'regex:/^[0-9]{10}$/'],
            'email'=>'nullable|email',
            'website' => 'nullable|url',
            'nationality' => 'nullable|string|min:3|max:30',
            'biography' => 'nullable|nullable|string|min:10',
            'featured'=>'required|in:1,0',
            'status' => 'required|in:active,inactive',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'image' => 'required|image',
            'image.*' => 'image|mimes:jpg,jpeg,png,webp',
        ];
    }
}
