<?php

namespace App\Http\Requests\Product;

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

            'name'=>'string|required|unique:products|max:250',
            'image'=>'required|dimensions:min_width=100,min_height=200',
            'sell_price'=>'required|',
            'category_id'=>'integer|required|exists:App\Category,id',
            'provider_id'=>'integer|required|exists:App\Provider,id',
        ];
    }
    public function messages()
    {
        return[                                 //codigo para retornar un requerimiento
            
            'name.string'=>'El valor no es correcto.', 
            'name.required'=>'Este campo es requerido.',
            'name.unique'=>'El producto ya esta registrado.',
            'name.max'=>'Solo se permite 255 caracteres.',

            'image.required'=>'El campo es requerido.',
            'image.dimensions'=>'Solo se permiten imagenes de 100x200 px.',

            'ell_price.required'=>'El campo es requerido',

            'category.integer'=>'El valor tiene que ser entero.', 
            'category.required'=>'Este campo es requerido.',
            'category.exists'=>'La categoria no existe.',

            'provider_id.integer'=>'El valor tiene que ser entero.', 
            'provider.required'=>'Este campo es requerido.',
            'provider.exists'=>'El proveedor no existe.',
        ];
    }
}
