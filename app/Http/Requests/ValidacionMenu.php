<?php

namespace App\Http\Requests;

use App\Rules\ValidarCampoUrl;
use Illuminate\Foundation\Http\FormRequest;

class ValidacionMenu extends FormRequest
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
    {  //para crear nuevas reglas php artisan make:rule nameRule
        return [
            'nombre' => 'required|max:50|unique:menu,nombre,' . $this->route('id'),
            'url' => ['required','max:100',new ValidarCampoUrl], // estoy invocando un objeto de la clase ValidarCampoUrl
            'icono' => 'nullable|max:50'
        ];
    }
    //public function messages() //metodo opcional para mostrar mensage de validacion que deseo
    //{
        //return [
            //'nombre.required' => 'El campo nombre es requerido',
            //'url.required'  => 'El campo url es requerido',
        //];
    //}
}
