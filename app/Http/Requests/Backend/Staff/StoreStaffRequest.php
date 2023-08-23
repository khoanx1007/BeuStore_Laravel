<?php

namespace App\Http\Requests\Backend\Staff;

use Illuminate\Foundation\Http\FormRequest;

class StoreStaffRequest extends FormRequest
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
            'email' => 'required|unique:staffs|max:255',
            'phone' => 'required|digits:10|numeric|unique:staffs|regex:/(0)[0-9]{9}/',
            'address' => 'required|max:255'
        ];
    }
    public function messages()
    {
        return[
            'digits'=>':attribute yêu cầu :digits số',
            'unique' => ':attribute đã tồn tại',
            'required' => ':attribute không được để trống',
            'max' => ':attribute không quá :max ký tự',
            'numeric' => ':attribute phải là chữ số',
        ];
    }
    public function attributes()
    {
        return[
            'name' => 'Tên',
            'email' => 'Email',
            'phone' => 'Số điện thoại',
            'address' => 'Địa chỉ'
        ];
    }
}

