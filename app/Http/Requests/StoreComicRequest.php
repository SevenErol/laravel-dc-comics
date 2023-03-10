<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required|unique:comics,title|min:5|max:50',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required|max:50',
            'serie' => 'required|max:50',
            'date' => 'required',
            'type' => 'required|max:50'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'A title is required',
            'title.min' => 'Title should be at least 5 characters',
        ];
    }
}
