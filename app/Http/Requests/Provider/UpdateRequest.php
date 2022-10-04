<?php

namespace App\Http\Requests\Provide;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [        //codigo para limitaciones
            'name'=>'required|string|max:200',

            'email'=>'required|email|string|unique:providers,email',
            $this->route('provider')->id.'|max:200',

            'phone'=>'required|string|<min:9></min:9>|unique:providers,phone',
            $this->route('provider')->id.'|max:9',
        ];
    }
    public function messages()
    {
        return[                                 //codigo para retornar un requerimiento
            'name.required'=>'Este campo es requerido.',
            'name.string'=>'El valor no es correcto.',
            'name.max'=>'Solo se permite 250 caracteres.',

            'email.required'=>'Este campo es requerido.',
            'email.email'=>'No es un correo electronico.',
            'email.string'=>'El valor no es correcto.',
            'email.max'=>'Solo se permite 250 caracteres.',
            'email.unique'=>'Ya se encuentra registrado.',

            'phone.required'=>'Este campo es requerido.',
            'phone.string'=>'El valor no es correcto.',
            'phone.max'=>'Solo se permite 9 caracteres.',
            'phone.min'=>'Se requiere 9 caracteres.',
            'phone.unique'=>'Ya se encuentra registrado.',
        ];
    }
}