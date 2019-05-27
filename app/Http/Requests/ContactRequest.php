<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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

    public function rules()
    {
        return [
            'name' => 'required|max:100',
            'email' => 'required|max:100',
            'phone' => 'required',
            'message' => 'required|max:500',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name  Is Required .',
            'email.required' => 'Email Title  Is Required .',
            'phone.required' => 'Phone Title  Is Required .',
            'message.required' => 'Message Title  Is Required .',

        ];
    }
}
