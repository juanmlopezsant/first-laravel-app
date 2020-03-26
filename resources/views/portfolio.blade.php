@extends('layout')

@section('title','Portfolio')

@section('content')
    <h1>Portfolio</h1>

    <ul>  
        @forelse($portfolio as $portfolioItem)
            <li>{{ $portfolioItem['title'] }}</li>
        
        @empty 
            <li>No hay proyectos disponibles</li>

        @endforelse 
     
    </ul>



@endsection