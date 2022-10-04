<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name'=>'required|string|max:50',
            'description'=>'nullable|string|max:250',      
        ];
    }
    public function messages()
    {
        return[                                 //codigo para retornar un requerimiento
            'name.required'=>'Este campo es requerido.',
            'name.string'=>'El valor no es correcto.',
            'name.max'=>'Solo se permite 250 caracteres.',
            'description.string'=>'El valor no es correcto.',
            'description.max'=>'Solo se permite 250 caracteres.',
        ];
    }
}
