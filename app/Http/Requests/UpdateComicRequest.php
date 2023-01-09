<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateComicRequest extends FormRequest
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
            'title' => ['required', Rule::unique('comics')->ignore($this->index->id), 'min:5', 'max:50'],
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required|max:50',
            'serie' => 'required|max:50',
            'date' => 'required',
            'type' => 'required|max:50'
        ];
    }
}
