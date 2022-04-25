<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required|unique:posts|min:20|max:255',
            'content' => 'required',
            'tags' => 'required',
            'description'=>'required'
            // 'status' => 'required|digits:'
        ];
    }
    public function messages()
    {
        return[
            'digits'=>':attribute không nằm trong danh sách có sẵn',
            'unique' => ':attribute đã tồn tại',
            'required' => ':attribute không được để trống',
            'min' => ':attribute tiêu đề cần ít nhất 20 kí tự ',
        ];
    }
    public function attributes()
    {
        return[
            'status'=>'Tình trạng',
            'title'=>'Tiêu đề',
            'content'=>'Nội dung',
            'tags' => 'Nhãn dán',
            'description'=>'Mô tả'
        ];
    }
}
