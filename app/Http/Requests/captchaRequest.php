<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CaptchaRequest extends FormRequest
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
          'captcha'        =>  'required|captcha',
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
          'captcha.required'         =>  '验证码不能为空',
          'captcha.captcha'         =>  '验证码不正确',
        ];
    }
}
