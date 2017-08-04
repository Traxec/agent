<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class order_updateRequest extends FormRequest
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
          'recontent'=>'required|max:255',
        ];
    }

    public function messages()
    {
      return [
        'recontent.required'=>'回复不能为空',
        'recontent.max'=>'问题回复内荣不能超过255位长度',
      ];
    }
}
