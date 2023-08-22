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
            'phone' => 'required|string|unique:suppliers,phone',
            'email' => 'nullable|email|unique:suppliers,email',
            'description' => 'nullable|string',
            'status' => 'required|in:active,inactive',
            'country_id' => 'required|exists:countries,id',
            'sort_number' => 'nullable|integer',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
        ];
    }
}
