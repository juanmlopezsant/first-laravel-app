<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortFolioController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request) // usamos este metodo cuando solo hay 1 metodo en el controlador
    {

    $portfolio = [
        ['title' => 'Proyecto 1'],
        ['title' => 'Proyecto 2'],
        ['title' => 'Proyecto 3'],
        ['title' => 'Proyecto 4']
    ]; 

        return view('portfolio',compact('portfolio'));  // el primero argumento es el nombre de la vista que debe ser igual al que está en el archivo de rutas, el segundo , el compact es para pasar el array 
    }
}
