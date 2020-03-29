@extends('layout')

@section('title','Portfolio')

@section('content')
    <h1>Portfolio</h1>

    <ul>  
        @forelse($projects as $project)
        <!-- Mostramos en la vista los proyectos desde la BD-->
            <li>{{ $project->title }} <br> 
            {{ $project->description }} <br>
            {{ $project->created_at->format('Y-m-d') }}    
            </li>
        
        @empty 
            <li>No hay proyectos disponibles</li>
        @endforelse 

        {{ $projects->links() }}
     
    </ul>



@endsection