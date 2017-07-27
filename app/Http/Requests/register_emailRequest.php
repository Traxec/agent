<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class register_emailRequest extends FormRequest
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
          'email'=>'required|email'
        ];
    }

    public function messages()
    {
      return [
        'email.required' => '邮箱地址不能为空',
        'email.email' => '请输入正确的邮箱地址',
      ];
    }
}
