<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project; 
 

class ProjectController extends Controller
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
        return view('projects.index', [
            'projects' => Project::latest()->paginate() 
        ]); 
    
    }

    // Recibimos el id que estamos mandando en web.php
    public function show($id){
        

        // Regresamos la vista correspondiente y mandamos el id correspondiente
        return view('projects.show', [
            'project' => Project::findOrFail($id)
        ]);

    }
}
