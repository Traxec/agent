<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class payRequest extends FormRequest
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
          'pay'=>'required|digits_between:1,8',
        ];
    }

    public function messages()
    {
      return [
        'pay.required'=>'输入金额不能为空',
        'pay.digits_between'=>'输入金额为1-8位长度数字',
      ];
    }
}
