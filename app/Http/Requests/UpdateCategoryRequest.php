<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3|max:200',
            'slug' => 'required|string|min:3|max:20',
            'description' => 'nullable|string',
            'status' => 'required|in:active,inactive',
            'featured'=>'required|in:1,0',
            'parent_id' => 'nullable|integer',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'image' => 'nullable|',
            'image.*' => 'required|image|mimes:jpg,jpeg,png',
        ];
    }
}
