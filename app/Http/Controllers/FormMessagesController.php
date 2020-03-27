<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormMessagesController extends Controller
{
    // Aquí vamos a procesar el formulario
    public function store(Request $request){ 

        // Para validar el request, se coloca el nombre de la propiedad
        request()->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'asunto' => 'required',
            'contenido' => 'required'
        ]);

        // return request('email'); 
        // return $request; 
        // return 'Formulario procesado';
        // return $request->get('name');
        
        return 'Datos validados'; 
    }
}
