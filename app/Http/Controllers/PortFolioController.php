<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project; 
 

class PortFolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Obtener los proyectos desde la base de datos
        // $portfolio = Project::get(); 

        // Mostrar sólo algunos por página
        // $projects = Project::latest()->paginate(); 

     
        // Regresamos la vista 
        return view('portfolio', [
            'projects' => Project::latest()->paginate() 
        ]); 
    
    }
}
