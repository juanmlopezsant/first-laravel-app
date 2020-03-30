<!-- Para crear un proyecto nuevo -->

@extends('layout')

@section('title','Crear Proyecto')

@section('content')
    <h1>Crear Proyecto</h1>

    @include('partials.validation-errors')

    <form method="POST" action="{{ route('projects.store') }}">
        <!-- Para proteger de ataques XSS -->
        @csrf

        <label for="title">Título: 
            <input type="text" name="title" value="{{ old('title',$project->title) }}">
        </label> <br>

        <label for="description">Descripción: 
            <textarea name="description">{{ old('description',$project->description) }}</textarea>
        </label> <br>

        <button>Guardar</button>

    </form>

   
@endsection