@extends('layout')

@section('title','Proyectos')

@section('content')
    <h1>Proyectos</h1>

    <!-- Mostramos el botón para crear un proyecto nuevo sólo si el usuario está autenticado -->
    @auth
        <a href="{{ route('projects.create') }}">Crear proyecto</a>
    @endauth
     

    <ul>  
        @forelse($projects as $project)
        <!-- Mostramos en la vista el detalle de cada proyecto desde la BD; el argumento $project es para saber el id-->
        <li><a href="{{ route('projects.show', $project) }}">{{ $project->title }}</a></li>
        
        @empty 
            <li>No hay proyectos disponibles</li>
        @endforelse 

        {{ $projects->links() }}
     
    </ul>



@endsection