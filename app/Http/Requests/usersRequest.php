<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class usersRequest extends FormRequest
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
          'username' => 'required|unique:users|regex:/\w{6,18}/',
          'nick' => 'required',
        ];
    }

    /**
 * 获取被定义验证规则的错误消息.
 *
 * @return array
 * @translator laravelacademy.org
 */
public function messages(){
    return [
        'username.required' => '用户名不能为空',
        'username.unique' => '用户名已存在',
        'username.regex'=> '用户名格式不正确，请输入6到18位字母',
        'nick.required'  => '客户名称不能为空',
    ];
}
}
