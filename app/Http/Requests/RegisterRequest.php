<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|unique:users',
            'phone' => 'required|numeric',
            'address' => 'required',
            'password' => 'required',
            're_password' => 'required',
        ];
    }

    public function messages()
    {
        return[
                'name.required' => ' họ và tên không được để trống',
                'email.required' => 'email không được để trống',
                'email.unique' => 'email đã tồn tại',
                'phone.required' => ' số điện thoại không được bỏ trống',
                'phone.numeric' => ' số điện thoại phải là số',
                'address.required' => 'địa chỉ không được bỏ trống',
                'password.required' => 'mật khẩu không được bỏ trống',
                're_password.required' => 'mật khảu không được để trống',
        ];
    }
}
