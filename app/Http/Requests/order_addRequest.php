<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class order_addRequest extends FormRequest
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
          'port'=>'required|digits_between:1,8',
          'system'=>'required|max:50',
          'type'=>'required|max:50',
          'content'=>'required|max:255',
          'img1'=>'image|max:2048',
        ];
    }

    public function messages()
    {
      return [
        'port.required'=>'端口号不能为空',
        'port.digits_between'=>'端口号为1-8位长度数字',
        'system.required'=>'系统不能为空',
        'system.max'=>'系统名称不能超过50位长度',
        'type.required'=>'问题类型不能为空',
        'type.max'=>'问题类型不能超过50位长度',
        'content.required'=>'问题描述不能为空',
        'content.max'=>'问题描述不能超过255位长度',
        'img1.image'=>'图片格式不对',
        'img1.max'=>'图片不能超过2M',
      ];
    }
}
