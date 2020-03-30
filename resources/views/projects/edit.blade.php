<!-- Para editar un proyecto existente -->

@extends('layout')

@section('title','Crear Proyecto')

@section('content')
    <h1>Editar Proyecto</h1>

  

    @include('partials.validation-errors')
        
    <form method="POST" action="{{ route('projects.update', $project) }}">

        <!-- Esto nos genera un campo oculto de tipo hidden, 
        para así poder hacer uso del método PATCH-->
        @method('PATCH') 

        <!-- Parte que es igual en los formularios de crear y actualziar-->
        @include('projects._form', ['btnText' => 'Actualizar'])

        

    </form>

   
@endsection