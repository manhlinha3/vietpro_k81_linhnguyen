<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
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
            'full'=>'required|min:3|max:20',
            'phone'=>'required|unique:users,phone,'.$this->idUser.',id',
            'address'=>'required',
            'id_number'=>'required',
        ];
    }

    function messages()
    {
        return [
            'full.required'=>'Không được để trống họ và tên',
            'full.min'=>'họ và tên không được < 3 ký tự',
            'full.max'=>'họ và tên không vượt quá 20 ký tự',
            'phone.required'=>'Không được để trống số điện thoại',
            'phone.unique' => 'Số điện thoại đã tồn tại',
            'address.required'=>'Không được để trống địa chỉ',
            'id_number.required'=>'Không được để trống số CMT',
        ];
    }
}
