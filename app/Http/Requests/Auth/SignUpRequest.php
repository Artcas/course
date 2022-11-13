<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name'     => 'required',
            'email'    => 'required|email|unique:customers',
            'phone'    => 'required',
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required'     => 'اسم التاجر مطلوب',
            'email.required'    => 'البريد الإلكتروني مطلوب',
            'phone.required'    => 'البريد الإلكتروني مطلوب',
            'password.required' => 'كلمة المرور مطلوبة'
        ];
    }
}
