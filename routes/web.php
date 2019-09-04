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
$portafolio = [
//  ['title' => 'Proyecto 1'],
//  ['title' => 'Proyecto 2'],
//  ['title' => 'Proyecto 3'],
//  ['title' => 'Proyecto 4'],
//  ['title' => 'Proyecto 5'],
];


Route::get('pruebas', function () {
    return "Hola desde la pagina de inicio";
});

//Route::get('contacto', function(){
//    return "Hola desde la pagina de contacto";
//})->name('contactos');

Route::get('saludos/{nombre?}', function($nombre = "Invitado"){
    return "Hola " . $nombre;
});

Route::view('/', 'inicio')->name('inicio');
Route::view('/acercade', 'acercade')->name('acercade');
Route::view('/portafolio', 'portafolio', compact('portafolio'))->name('portafolio');
Route::view('/contacto', 'contacto')->name('contacto');
