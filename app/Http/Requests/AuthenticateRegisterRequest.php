<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthenticateRegisterRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|unique:users|email',
            'password' => 'required|confirmed|min:8'
        ];
    }
    public function messages()
    {
        return[
            'name' => ':attribute không được để trống',
            'email'=>':attribute cần đúng định dạng',
            'unique'=>':attribute đã tồn tại',
            'required' => ':attribute không được để trống',
            'min' => ':attribute cần ít nhất 8 kí tự ',
            'confirmed'=>':attribute không trùng khớp'
        ];
    }
    public function attributes()
    {
        return[
            'name'=>'Tên',
            'email'=>'Email',
            'password'=>'Mật khẩu'
        ];
    }
}
