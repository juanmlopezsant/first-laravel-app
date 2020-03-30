<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home'); 
Route::view ('/about', 'about')->name('about');
Route::view ('/contact', 'contact')->name('contact');
// Ruta para el envio de los datos del formulario al correo electrónico sin BD
Route::post('contact','FormMessagesController@store')->name('formmessages.store');


// Usamos PortFolioController porque para esa ruta tenemos un controlador
Route::get('/portfolio','ProjectController@index')->name('projects.index'); 

// Para crear proyectos nuevos; debe de ir antes que la de abajo
Route::get('/portfolio/create', 'ProjectController@create')->name('projects.create');

// Para editar un proyecto ya existente
Route::get('/portfolio/{project}/edit', 'ProjectController@edit')->name('projects.edit');

// Para mostrar y mandar los datos actualizados del proyecto ya existente
Route::patch('/portfolio/{project}', 'ProjectController@update')->name('projects.update');

// Ruta para el envio de los datos del formulario del nuevo proyecto a la BD 
Route::post('/portfolio','ProjectController@store')->name('projects.store');

// Para mostrar los proyectos con información a detalle; mandamos el id y lo debemos recibir en PortFolioController.php
Route::get('/portfolio/{project}', 'ProjectController@show')->name('projects.show');

// Para eliminar un proyecto
Route::delete('/portfolio/{project}', 'ProjectController@destroy')->name('projects.destroy');


// Utilizando Route::resource para manipular las 7 acciones REST definidas arriba
// Route::resource('portfolio', 'ProjectController')->parameters(['portfolio' => 'project'])->names('projects');

// Para el manejo del login 
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
