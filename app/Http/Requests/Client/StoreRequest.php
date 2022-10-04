<?php

namespace App\Http\Requests\Cliente;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'=>'string|required|max:250',
            'dni'=>'string|required|unique:clients|max:8',
            'ruc'=>'string|required|unique:clients|max:11',
            'address'=>'string|required|max:250',
            'phone'=>'string|required|unique:clients|max:9',
            'email'=>'string|required|unique:products|max:250|email:rfc,dns',

        ];
    }
    public function messages()
    {
        return[                                 //codigo para retornar un requerimiento
            
            'name.string'=>'El valor no es correcto.', 
            'name.required'=>'Este campo es requerido.',
            'name.max'=>'Solo se permite 255 caracteres.',

            'dni.string'=>'El campo es requerido.',
            'dni.required'=>'Este campo es requerido.',
            'dni.max'=>'Solo se permite 8 caracteres.',
            'dni.unique'=>'El documento ya esta registrado.',

            'ruc.string'=>'El valor no es correcto.', 
            'ruc.required'=>'Este campo es requerido.',
            'ruc.max'=>'Solo se permite 255 caracteres.',
            'ruc.unique'=>'El documento ya esta registrado.',

            'address.string'=>'El valor no es correcto.', 
            'address.required'=>'Este campo es requerido.',
            'address.max'=>'Solo se permite 255 caracteres.',

            'phone.string'=>'El valor no es correcto.', 
            'phone.required'=>'Este campo es requerido.',
            'phone.max'=>'Solo se permite 255 caracteres.',
            'phone.unique'=>'El producto ya esta registrado.',

            'email.string'=>'El valor no es correcto.', 
            'email.required'=>'Este campo es requerido.',
            'email.max'=>'Solo se permite 255 caracteres.',
            'email.email'=>'No es un correo electronico',
            'email.unique'=>'El email ya esta registrado.',

        ];
    }
}
