<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PublishertRequest extends FormRequest
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
            'publisher_name' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'publisher_name.required' => ' Tên nhà phát hành không được để trống',
        ];
    }
}
