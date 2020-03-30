<!-- Para editar un proyecto existente -->

@extends('layout')

@section('title','Crear Proyecto')

@section('content')
    <h1>Editar Proyecto</h1>

    @if($errors->any())
        <ul>
            @forearch($errors->all() as $error)
            <li>{{ $error }}}</li>
            @endforeach
        </ul>
    @endif
        
    <form method="POST" action="{{ route('projects.update', $project) }}">
        <!-- Para proteger de ataques XSS -->
        @csrf

        <!-- Esto nos genera un campo oculto de tipo hidden, 
        para así poder hacer uso del método PATCH-->
        @method('PATCH') 

        <label for="title">Título: 
        <input type="text" name="title" value="{{ old('title',$project->title) }}">
        </label> <br>

        <label for="description">Descripción: 
            <textarea name="description">{{ old('description',$project->description) }}</textarea>
        </label> <br>

        <button>Actualizar</button>

    </form>

   
@endsection