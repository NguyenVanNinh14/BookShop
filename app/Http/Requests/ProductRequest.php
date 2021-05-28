<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'product_name' => 'required',
            'product_image' => 'required',
            'product_price' => 'required',
            'promotional_price' => 'required',
            'product_content' => 'required',
        ];
    }

    public function messages()
    {
        return[
                'product_name.required' => ' Tên sản phẩm không được để trống',
                'product_image.required' => 'Ảnh sản phẩm không được để trống',
                'product_price.required' => ' Giá sản phẩm không được bỏ trống',
                'promotional_price.required' => 'Giá khuyến mãi không được bỏ trống',
                'product_content.required' => 'Nội dung không được bỏ trống',
        ];
    }

}
