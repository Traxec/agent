<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class adminperson_updateRequest extends FormRequest
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
         'nick'        =>  'required|alpha_num|between:1,4',
         'phone'=>'required|digits_between:1,12',
         'email'       =>  'email',
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
           'nick.required'         =>  '姓名不能为空',
           'nick.alpha_num'        =>  '姓名格式不对请重新输入',
           'nick.between'          =>  '请输入1~4位的姓名',
           'phone.digits_between'=>'请输入1-12位电话',
           'email.email'           =>  '邮箱格式不正确',
       ];
   }
}
