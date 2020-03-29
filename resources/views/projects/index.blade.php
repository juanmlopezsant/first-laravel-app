@extends('layout')

@section('title','Portfolio')

@section('content')
    <h1>Portfolio</h1>

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