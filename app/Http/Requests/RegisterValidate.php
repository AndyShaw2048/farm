<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterValidate extends FormRequest
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
            'telephone' => 'bail|required|digits:11',
            'password' => 'bail|required|min:6|max:20|alpha_num|confirmed',
            'email' => 'email|nullable',
        ];
    }

    /**
     * 获取被定义验证规则的错误消息
     *
     * @return array
     * @translator laravelacademy.org
     */
    public function messages(){
        return [
            'telephone.required' => '电话号码禁止为空',
            'telephone.digits' => '电话号码为11位纯数字',
            'password.required' => '密码禁止为空',
            'password.min' => '密码最小长度为6位',
            'password.man' => '密码最大长度为20位',
            'password.alpha_num' => '密码只能为大写字母、小写字母、数字',
            'password.confirmed' => '两次输入密码不符合',
            'email.email' => 'Email格式错误',
        ];
    }
}
