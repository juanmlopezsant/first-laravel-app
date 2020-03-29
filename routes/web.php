<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home'); 
Route::view ('/about', 'about')->name('about');
Route::view ('/contact', 'contact')->name('contact');

// Usamos PortFolioController porque para esa ruta tenemos un controlador
Route::get('/portfolio','ProjectController@index')->name('projects.index'); 

// Para mostrar los proyectos con información a detalle; mandamos el id y lo debemos recibir en PortFolioController.php
Route::get('/portfolio/{id}', 'ProjectController@show')->name('projects.show');

// Ruta para el envio de los datos del formulario 
Route::post('contact','FormMessagesController@store')->name('formmessages.store');