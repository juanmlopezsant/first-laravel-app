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
        
        // Cuando hacemos un proyecto mandamos un proyecto vacio para poder usarlo como valor por defecto
        return view('projects.create',[
            'project' => new Project 
        ]);

    }

    // Para guardar el proyecto en la BD y devolver una respuesta, esto se ejecuta sólo al crear por primera vez un proyecto; inyectamos CreateProjectRequest para tener acceso a las reglas de validación para el permiso sobre las acciones de usuarios
    public function store(){
    
        // Mandamos la request sólo con campos específicos para evitar asignación masiva de datos
        Project::create([
            'title' => request('title'),
            'description' => request('description')
        ]);

        return redirect()->route('projects.index')->with('status', 'Proyecto creado con éxito');

    }

    // Para editar un proyecto en específico
    public function edit(Project $project){

        // Regresamos la vista y le pasamos el proyecto a la misma 
        return view('projects.edit',[
            'project' => $project
        ]);
    }

    // Para mandar el proyecto actualizado
    public function update(Project $project){

        // Actualizamos el proyecto 
       $project->update([ 
            'title' => request('title'),
            'description' => request('description')
       ]);

        // Mandamos un redirect y como argumento el proyecto actualizado
        return redirect()->route('projects.show', $project)->with('status', 'Proyecto actualizado con éxito'); 
    }

    // Para eliminar un proyecto
    public function destroy(Project $project){

        $project->delete(); 

        return redirect()->route('projects.index')->with('status', 'Proyecto eliminado con éxito');; 

        
    }



}
