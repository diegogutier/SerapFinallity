<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreatePeliculasRequest extends Request
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
            //aca van las valaidaciones que iran en la vista del html
            'nombre'=>'required',//decimos que el nombre de la pelicula es obligatorio
            'ano_lanzamiento'=>'required',
            'descripcion'=>'required',
            'idioma'=>'required',
            'precio'=>'required|numeric',
            'promedio_cal'=>'required|numeric',


        ];
    }
}
