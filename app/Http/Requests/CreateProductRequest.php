<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'price' =>  'required|numeric',
            'description' => 'nullable|string|max:255',
            'image' => 'image|mimes:png,jpg',
            'category_id' => 'required|exists:categories,id',
            'market_id' => 'required|exists:markets,id'
        ];
    }
}
