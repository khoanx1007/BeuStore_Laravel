<?php

namespace App\Http\Requests\auth;

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
            'name' => 'required|max:255',
            'email' => 'required|max:255|unique:users,email|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8',
            'phone' => 'required|digits:10|numeric|unique:users,phone|regex:/(0)[0-9]{9}/'
        ];
    }
    public function messages()
    {
        return [
            '*.required' => ':attribute không được để trống',
            '*.max' => ':attribute  quá :max ký tự',
            '*.min' => ':attribute tối thiểu :min ký tự',
            '*.confirmed' => ':attribute không trùng khớp',
            'email.regex' => 'Email không đúng định dạng, Ví dụ: abc@example.com',
            'phone.regex' => 'Số điện thoại phải bắt đầu bằng số 0',
            'numeric' => ':attribute phải là số',
            '*.unique' => ':attribute đã tồn tại'
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'Tên',
            'email' => 'Email',
            'password' => 'Mật khẩu',
            'password_confirmation' =>  'Mật khẩu nhập lại',
            'phone' => 'Số điện thoại'
        ];
    }
}
