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
Route::get('/peliculas/{page?}', 'PeliculaController@index');
Route::get('/detalle', [
    'uses' => 'PeliculaController@detalle',
    'as' => 'detalle.pelicula'
]);

Route::resource('/usuario', 'UsuarioController');


Route::group(['prefix'=>'frutas'], function(){
    Route::get('index', 'FrutaController@index');
    Route::get('detail/{id}', 'FrutaController@detail');
});
/*
 *  METODOS HTTP
 *  GET:    Conseguir datos
 *  POST    Guardar datos
 *  PUT:    Actualizar recursos
 *  DELETE: Eliminar recursos
  
 

Route::get('/mostrar-fecha', function (){
    $titulo = "Estoy mostrando la fecha";
   return view('mostrar-fecha', array(
       'titulo' => $titulo
   ));
});

Route::get('/pelicula/{titulo}/{year?}', function($titulo = "No hay una pelicula seleccionada", $year = 2021){
    return view('pelicula', array(
        'titulo' => $titulo,
        'year' => $year
    ));
})->where(array(
    'titulo' => '[a-zA-Z]+',
    'year' => '[0-9]+'
));

Route::get('/listado-peliculas', function(){
    $titulo = "Listado de peliculas";
/*    return view('peliculas.listado', array(
        'titulo' => $titulo
    ));
 **c/
    $listado = array('Spiderman', 'DeadPool', 'Iron Man');
    return view('peliculas.listado')
            ->with('titulo', $titulo)
            ->with('listado', $listado);
});

Route::get('/pagina-generica', function(){
    return view('pagina');
});
*/