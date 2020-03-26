<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Para ir a la página de inicio 
Route::get('/', function () {
    //return view('welcome');
    return 'Hola dede inicio'; 
});

// Para ir a la página /contacto en el UR
Route::get('/contacto', function(){
    return 'Hola desde contacto';
});

// Para mandar parámetros obligatorio por la URL 
Route::get('saludo/{nombre}', function($nombre){
    return 'Saludos ' .$nombre; 
});

// Para mandar parámetros obligatorio por la URL 
Route::get('saludo/{nombre}', function($nombre){
    return 'Saludo ' .$nombre; 
});

// Para mandar parámetros opcionales por la URL, si no se pasa nada se coloca el nombre de "Invitado"
Route::get('saludo/{nombre?}', function($nombre = "Invitado"){
    return 'Saludo ' .$nombre;
});