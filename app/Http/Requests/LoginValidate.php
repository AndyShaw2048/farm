<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginValidate extends FormRequest
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
            'password' => 'bail|required'
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
            'telephone.required' => '电话号码不能为空',
            'telephone.digits' => '电话号码为11位纯数字',
            'password.required' => '密码不能为空',
        ];
    }
}
