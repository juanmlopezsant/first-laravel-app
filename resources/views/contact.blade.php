@extends('layout')

@section('title','Contact')

@section('content')
    <h1>Contact</h1>

      
    <form method="POST" action="{{ route('formmessages.store') }}">

        <!-- Para protección ante ataques, agrega un campo token oculto -->
        @csrf 
        <input type="text" 
        placeholder="Escribe tu nombre" name="nombre"
        value="{{ old('nombre') }}"><br>
        {{ $errors->first('nombre') }} <br>

        <input type="email" 
        placeholder="Escribe tu email" name="email"
        value="{{ old('email') }}"><br>
        {{ $errors->first('email') }} <br>

        <input type="subject" 
        placeholder="Escribe el asunto" name="asunto"
        value="{{ old('asunto') }}"><br>
        {{ $errors->first('asunto') }} <br>
        
        <textarea placeholder="Escribe tu mensaje" 
        name="contenido">{{ old('contenido') }}</textarea><br>
        {{ $errors->first('contenido') }} <br>

        <button>Enviar</button><br>

        </form>  
@endsection