<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSupplierRequest extends FormRequest
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
//            'phone' => ['required', 'regex:/^(?:(?:\+|00)([1-9]{1}[0-9]{0,2}))?[-.\s]?((?:[0-9]{3})[-.\s]?[0-9]{3}[-.\s]?[0-9]{4})$/'],
            'phone' => 'required|string',
            'email' => 'nullable|email|unique:suppliers,email',
            'description' => 'nullable|string',
            'status' => 'required|in:active,inactive',
            'country_id' => 'required|exists:countries,id',
            'city_id' => 'nullable|exists:cities,id',
            'sort_number' => 'nullable|integer',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
        ];
    }
}
