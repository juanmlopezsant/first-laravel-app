@extends('layout')

@section('title',$project->title)

@section('content')
    <!-- Tenemos acceso a esta variable por medio de PortFolioController.php-->
    <h1>Título: {{ $project->title }}</h1>
    <p>Descripción: {{ $project->description }}</p>
    <p>Fecha de creación: {{ $project->created_at }}</p>


@endsection