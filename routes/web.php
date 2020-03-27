<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home'); 
Route::view ('/about', 'about')->name('about');

// Usamos PortFolioController porque para esa ruta tenemos un controlador
Route::get('/portfolio','PortFolioController@index')->name('portfolio'); 
Route::view ('/contact', 'contact')->name('contact'); 

// Ruta para el envio de los datos del formulario 
Route::post('contact','FormMessagesController@store');