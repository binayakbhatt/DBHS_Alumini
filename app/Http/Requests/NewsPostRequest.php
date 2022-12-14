<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsPostRequest extends FormRequest
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
            'date' => 'required|date',
            'headline' => 'required|max:255',
            'body' => 'required',
            'image'=>'image|mimes:png,jpg|max:2048',
            'reporter' => 'required|max:150'
        ];
    }
}
