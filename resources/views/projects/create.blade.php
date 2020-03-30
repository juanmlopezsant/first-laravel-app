<!-- Para crear un proyecto nuevo -->

@extends('layout')

@section('title','Crear Proyecto')

@section('content')
    <h1>Crear Proyecto</h1>

    <!-- Mostrar mensaje de creado con éxito -->
    @include('partials.session-status')

    

    <form method="POST" action="{{ route('projects.store') }}">
    
        <!-- Parte que es igual en los formularios de crear y actualziar-->
        @include('projects._form', ['btnText' => 'Guardar'])

        

    </form>

   
@endsection