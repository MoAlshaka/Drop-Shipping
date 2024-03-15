<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:100',
            'price' => 'required|max:100|numeric',
            'desc' => 'required',
            'stock' => 'required|integer',
            'category_id' => 'required',
            'tag' => 'required',
            'admin_id' => 'required',
            'image' => 'required|mimes:png,jpg',
        ];
    }
}