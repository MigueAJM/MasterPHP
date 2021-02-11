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

Route::get('/', function () {
    //return view('welcome');
    echo "<h1>HOLA MUNDO!!</h1>";
});

/*
 *  METODOS HTTP
 *  GET:    Conseguir datos
 *  POST    Guardar datos
 *  PUT:    Actualizar recursos
 *  DELETE: Eliminar recursos
 * 
 */

Route::get('/mostrar-fecha', function (){
    $titulo = "Estoy mostrando la fecha";
   return view('mostrar-fecha', array(
       'titulo' => $titulo
   ));
});

Route::get('/pelicula/{titulo?}', function($titulo = "No hay una pelicula seleccionada"){
    return view('pelicula', array(
        'titulo' => $titulo
    ));
});