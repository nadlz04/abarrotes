<?php

namespace App\Http\Requests\Provider;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [        //codigo para limitaciones
            'name'=>'required|string|max:200',
            'email'=>'required|email|string|max:200|unique:providers',
            'phone'=>'required|string|max:9|min:9|unique:providers',
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