<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class system_addRequest extends FormRequest
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
          'template'=>'required',
          'title'=>'required|max:8',
          'nav'=>'required|max:50',
          'server'=>'required|max:50',
          'phone'=>'required|digits_between:1,12',
          'website'=>'required|max:255',
          'email'=>'required|email',
          'address'=>'required|max:255',
          'company'=>'required|max:50',

          'img1'=>'mimes:bmp|max:512',
          'img2'=>'mimes:bmp|max:512',
          'img3'=>'mimes:ico|max:512',
        ];
    }

    public function messages()
    {
      return [
        'template.required'=>'请选择一个系统模板',
        'port.required'=>'标题不能为空',
        'port.digits_between'=>'标题为1-8位长度',
        'title.required'=>'标题不能为空',
        'title.max'=>'标题最多8位长度',
        'nav.required'=>'导航不能为空',
        'nav.max'=>'导航不能超过50位长度',
        'server.required'=>'服务器不能为空',
        'server.max'=>'服务器名称不能超过50位长度',
        'phone.required'=>'电话不能为空',
        'phone.digits_between'=>'请输入1-12位电话',
        'website.required'=>'网址不能为空',
        'website.max'=>'网址不能超过255个长度',
        'email.required'=>'邮箱地址不能为空',
        'email.email'=>'邮箱格式不对',
        'address.required'=>'地址不能为空',
        'address.max'=>'地址不能超过255个长度',
        'company.required'=>'公司名称不能为空',
        'company.max'=>'公司名称不能超过50位长度',
        'img1.max'=>'图片大小不能超过500k',
        'img1.mimes'=>'图片1格式不对,请上传bmp格式图片',
        'img2.max'=>'图片大小不能超过500k',
        'img2.mimes'=>'图片1格式不对,请上传bmp格式图片',
        'img3.max'=>'图片大小不能超过500k',
        'img3.mimes'=>'图片1格式不对,请上传ico格式图片',
      ];
    }
}
