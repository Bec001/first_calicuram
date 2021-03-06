<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaikorogameRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required'
            ];
    }
    
    public function messages()
    {
        return [
        'name.required' => '名前を入力してください。'
        ];
    }
}
