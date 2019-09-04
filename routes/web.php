<?php

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

//Route::get('contacto', function(){
//    return "Hola desde la pagina de contacto";
//})->name('contactos');

Route::get('saludos/{nombre?}', function($nombre = "Invitado"){
    return "Hola " . $nombre;
});

Route::view('/', 'inicio')->name('inicio');
Route::view('/acercade', 'acercade')->name('acercade');
Route::view('/portafolio', 'portafolio')->name('portafolio');
Route::view('/contacto', 'contacto')->name('contacto');
