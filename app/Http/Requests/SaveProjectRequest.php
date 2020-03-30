<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() // Determina si el usuario que envia un formulario por ejemplo, está autorizado
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() // Si authorize() es true, se ejecuta este método 
    {
        return [
            'title' => 'required',
            'descrption' => 'required'
        ];
    }

    // Función para mostrar errores de validación de los campos en el formulario
    public function messages(){
        return [
            'title.required' => 'El proyecto debe de tener un título'
        ];
    }
}
