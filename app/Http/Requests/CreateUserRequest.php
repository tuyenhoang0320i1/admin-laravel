<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
//    /**
//     * Determine if the user is authorized to make this request.
//     *
//     * @return bool
//     */
//    public function authorize()
//    {
//        return true;
//    }
//
//    /**
//     * Get the validation rules that apply to the request.
//     *
//     * @return array
//     */
//    public function rules()
//    {
//        return [
//            'name' => 'required',
//            'email' => 'required|email|unique:users,email',
//            'password' => 'required|min:8|max:32',
//            'birthday' => 'required',
//            'role' => 'required'
//        ];
//    }
//
//    public function messages()
//    {
//        return [
//            'name.required' => 'Tên không được để trống.',
//            'email.required' => 'Email không được để trống.',
//            'email.email' => 'Email không đúng định dạng.',
//            'email.unique' => 'Email đã tồn tại.',
//
//
//        ];
//    }
}
