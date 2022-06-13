<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //book以外からの使用をできなくする
        if($this->path() == 'book'){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'barcode'=>'required',
            'number' => 'numeric|between0,100',
            'price' => 'integer',
        ];
    }
    public function messages(){
        return[
            'name.required' => '名前は必ず入力してください。',
            'barcode.required' => 'メールアドレスが必要です',
            'number.numeric' => '年齢は整数で入力してください',
            'number.between' => '0 ～ 100までの入力が可能です。',
        ];
    }
}
