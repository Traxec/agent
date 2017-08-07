<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class templateRequest extends FormRequest
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
          'price'=>'required|digits_between:1,8',
          'title'=>'required|max:50',
        ];
    }

    public function messages()
    {
      return [
        'price.required'=>'价格不能为空',
        'price.digits_between'=>'价格为1-8位长度数字',
        'title.required'=>'模板名不能为空',
        'title.max'=>'模板名名称不能超过50位长度',
      ];
    }
}
