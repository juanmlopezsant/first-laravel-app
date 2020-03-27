<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MessageReceived; 
use Illuminate\Support\Facades\Mail; 

class FormMessagesController extends Controller
{
    // Aquí vamos a procesar el formulario
    public function store(Request $request){ 

        // Para validar el request, se coloca el nombre de la propiedad
        $msg = request()->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'asunto' => 'required',
            'contenido' => 'required'
        ]);

        // Enviamos el email; pasamos la variable $msg y debemos recibirla en MessageReceived.php
        Mail::to('blueskylander777@gmail.com')->queue(new MessageReceived($msg)); 
            
       // Imprimmos la informacion que se acaba de enviar en la pantalla
        // return new MessageReceived($msg);         


        return 'Mensaje enviado'; 
    }
}
