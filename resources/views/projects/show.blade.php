@extends('layout')

@section('title',$project->title)

@section('content')
    <!-- Tenemos acceso a esta variable por medio de PortFolioController.php-->
    <h1>Título: {{ $project->title }}</h1>
    <!--Ruta para editar un proyecto, le pasamos como segundo parámetro el proyecto-->
    <a href="{{ route('projects.edit', $project) }}">Editar Proyecto</a>

    <p>Descripción: {{ $project->description }}</p>
    <p>Fecha de creación: {{ $project->created_at }}</p>


@endsection