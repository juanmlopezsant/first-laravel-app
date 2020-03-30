<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project; 
use Illuminate\Http\Request\SaveProjectRequest;
 

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

    // Para guardar el proyecto en la BD y devolver una respuesta, esto se ejecuta sólo al crear por primera vez un proyecto; inyectamos CreateProjectRequest para tener acceso a las reglas de validación para el permiso sobre las acciones de usuarios
    public function store(SaveProjectRequest $request){
    
        // Mandamos la request sólo con campos específicos para evitar asignación masiva de datos
       
        Project::create($request->validated());

        return redirect()->route('projects.index');

    }

    // Para editar un proyecto en específico
    public function edit(Project $project){

        // Regresamos la vista y le pasamos el proyecto a la misma 
        return view('projects.edit',[
            'project' => $project
        ]);
    }

    // Para mandar el proyecto actualizado
    public function update(Project $project, SaveProjectRequest $request){

        // Actualizamos el proyecto 
        $project->update($request->validated());

        // Mandamos un redirect y como argumento el proyecto actualizado
        return redirect()->route('projects.show', $project); 
    }



}
