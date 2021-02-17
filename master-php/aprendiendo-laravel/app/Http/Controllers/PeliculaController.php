<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function index($page = 1){
        $title = "My movie list";
        return view('pelicula.index', [
            'title' => $title,
            'page' => $page
        ]);
    }

    public function detalle(){
        echo '<h1>Detalle de mi pelicula</h1>';
        die();
    }
}
