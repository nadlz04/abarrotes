<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{

    public function authorize()
    {
        return false;
    }

    public function rules()
    {
        return [
            'name'=>'string|required|max:250',
            'dni'=>'string|required|unique:products.dni,',
            $this->route('client')->id.'|max:8',
            'ruc'=>'string|required|unique:products.ruc',
            $this->route('client')->id.'|max:11',
            'address'=>'string|required|max:250',
            'phone'=>'string|required|unique:products.phone',
            $this->route('client')->id.'|max:9',
            'email'=>'string|required|unique:products.email',
            $this->route('client')->id.'|max:250|email:rfc,dns',
            
        ];
    }
}
