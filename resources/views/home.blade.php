@extends('layout')

@section('title','Home')

@section('content')  <!-- este es el nombre del yield -->
    <!-- este contenido es único para home.blade.php-->
    <h1>Home</h1>

    <!-- Para acceder al usuario autenticado; lo que está dentro de auth es para ejecutarse si hay un usuario autenticado -->
    @auth 
        {{ auth()->user()->name }}
    @endauth   
     
@endsection
