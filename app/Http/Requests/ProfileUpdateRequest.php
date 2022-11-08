<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
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
            //'password'=> 'required|min:8|confirmed',
            'batch'=>'required|max:4|string',
            'mobile' => 'string|nullable',
            'dob'=> 'date|nullable',
            'image' => 'image|mimes:png,jpg|max:2048|nullable',
            'occupation' => 'string|nullable',
            'current_residence' =>'string|nullable',
            'city' =>'string|required',
            'state' =>'string|nullable',
            'country' =>'string|nullable',
            'pin_code' =>'string|nullable',
            'aboutme' =>'nullable',


        ];
    }
}
