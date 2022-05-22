<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequesr extends FormRequest
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
            'name' => 'required|unique:products|max:30',
            'tags' => 'required',
            'categories' => 'required',
            'description'=>'required',
            'price_origin'=>'required',
            'price_sale'=>'required',
        ];
    }
    public function messages()
    {
        return[
            'digits'=>':attribute không nằm trong danh sách có sẵn',
            'unique' => ':attribute đã tồn tại',
            'required' => ':attribute không được để trống',
            'max' => ':attribute không quá 30 ký tự ',
            'name' => ':attribute không được để trống ',
        ];
    }
    public function attributes()
    {
        return[
            'status'=>'Tình trạng',
            'name'=>'Tên game',
            'content'=>'Nội dung',
            'tags' => 'Tags',
            'description'=>'Mô tả',
            'categories'=>'Danh mục',
            'price_origin'=>'Giá gốc',
            'price_sale'=>'Giá sale',
            'image'=>'Hình ảnh',
        ];
    }
}
