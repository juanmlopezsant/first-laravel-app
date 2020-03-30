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
    public function show(Project $project){
        
        // Regresamos la vista correspondiente y mandamos el id correspondiente
        return view('projects.show', [
            'project' => $project
        ]);

    }

    public function create(){
        
        return view('projects.create');

    }

    public function store(){
        
        // Imprimimos la request 
        // return request();

        // $title = request('title');
        // $description = request('description'); 

        // Guardamos los campos en la BD
        Project::create([
            'title' => request('title'),
            'description' => request('description')
        ]);

        // Podemos hacer lo mismo de arriba con (sólo si los campos se llaman igual aquí y en la BD): 
        // Project::create(request()->all()); 

        return redirect()->route('projects.index');

    }


}
