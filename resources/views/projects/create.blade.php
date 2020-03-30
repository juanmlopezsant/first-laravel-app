<!-- Para crear un proyecto nuevo -->

@extends('layout')

@section('title','Crear Proyecto')

@section('content')
    <h1>Crear Proyecto</h1>

    <form method="POST" action="{{ route('projects.store') }}">
        <!-- Para proteger de ataques -->
        @csrf

        <label for="title">Título: 
            <input type="text" name="title">
        </label> <br>

        <label for="description">Descripción: 
            <textarea name="description"></textarea>
        </label> <br>

        <button>Guardar</button>

    </form>

   
@endsection