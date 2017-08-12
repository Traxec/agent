<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class users_updateRequest extends FormRequest
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
          'nick'        =>  'required|alpha_num|between:4,8',
          'phone'       =>  'required|digits_between:1,12',
          'email'       =>  'email',
          'b_bank'      =>  'alpha_num|between:2,40|nullable',
          'b_branch'    =>  'alpha_num|between:2,20|nullable',
          'b_account'   =>  'alpha_num|between:2,20|nullable',
          'b_master'    =>  'alpha_num|between:2,10|nullable',

        ];
    }

    /**
     * 获取被定义验证规则的错误消息.
     *
     * @return array
     * @translator laravelacademy.org
     */
    public function messages()
    {
        return [
            'nick.required'         =>  '姓名不能为空',
            'nick.alpha_num'        =>  '客户名称必须是中文或数字或字母，请重新输入',
            'nick.between'          =>  '请输入4~8位的用户名',
            'phone.digits_between'=>'请输入1-12位电话',
            'email.email'           =>  '邮箱格式不正确',
            'b_bank.alpha_num'      =>  '开户行名称必须是中文或数字或字母，请重新输入',
            'b_bank.between'        =>  '请输入2~40位的开户行名称',
            'b_branch.alpha_num'    =>  '支行名称必须是中文或数字或字母，请重新输入',
            'b_branch.between'      =>  '请输入2~20位的支行名称',
            'b_account.alpha_num' =>  '银行账户必须是中文或数字或字母，请重新输入',
            'b_account.between'     =>  '请输入2~20位的银行账户',
            'b_master.alpha_num'  =>  '户主名称必须是中文或数字或字母，请重新输入',
            'b_master.between'      =>  '请输入2~10位的户主名称',
        ];
    }
}
