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

// Para ir a la página /contacto en el URL; "name" nos sirve para darle el nombre a la ruta, para así no cambiar uno por uno
Route::get('/contactame', function(){
    return 'Hola desde contacto';
}) ->name('contactos');

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

// Rutas con nombre; escribimos el nombre de la ruta que pusimos cuando la definimos con "name" para hacer referencia al nombre y no a la URL 
Route::get('/', function(){
    echo "<a href = '". route('contactos') .  "'>Contactos 1</a><br>";
    echo "<a href = '". route('contactos') .  "'>Contactos 2</a><br>";
    echo "<a href = '". route('contactos') .  "'>Contactos 3</a><br>";
    echo "<a href = '". route('contactos') .  "'>Contactos 4</a><br>";
    echo "<a href = '". route('contactos') .  "'>Contactos 5</a><br>";
});


