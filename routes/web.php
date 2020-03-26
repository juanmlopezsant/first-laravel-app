<?php

use Illuminate\Support\Facades\Route;

// Una forma de pasar la variable hacia la vista: 
/*
Route::get('/', function(){
    $nombre = "Jorge";
    return view('home')->with('nombre', $nombre); // mandamos el nombre y el valor de la variable 
})->name('home'); 
*/

//Otra forma de hacerlo, un poco más óptimo: 
Route::view('/', 'home')->name('home'); 
Route::view ('/about', 'about')->name('about');
Route::view ('/portfolio', 'portfolio')->name('portfolio');
Route::view ('/contact', 'contact')->name('contact');