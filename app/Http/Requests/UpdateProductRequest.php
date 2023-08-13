<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'category_id' => 'required|exists:product_categories,id',

            'name' => 'required|string|min:3|max:200',
            'slug' => 'required|string|min:3|max:200',
            'sku' => 'nullable|string|min:3|max:200',
            'short_description' => 'nullable|string|min:3',
            'description' => 'nullable|string|min:3',
            'prices' => 'nullable|numeric',
            'status' => 'required|in:active,inactive',
            'featured'=>'required|in:1,0',

            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',

            'image' => 'nullable',
            'image.*' => 'required|image|mimes:jpg,jpeg,png,webp',

            'product_tags'=>'nullable|string',

            'gallery' => 'nullable|array',
            'gallery.*' => 'nullable|image|mimes:jpg,jpeg,png,webp',

            'attributes' => 'array',
            'attributes.*.name' => 'nullable|string',
            'attributes.*.value' => 'nullable|string',
            'authors_ids' => 'array',
            'authors_ids.*' => 'required|exists:authors,id',

            'auditors_ids' => 'required|exists:authors,id',
            'auditors_ids.*' => 'required|exists:authors,id',

            'created_at' => 'nullable|date',
        ];
    }
}
