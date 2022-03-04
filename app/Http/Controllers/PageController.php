<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class PageController extends Controller
{
    public function index(){
        $lista_film = Movie::all();
        return view ('listaFilm', compact('lista_film'));
    }
}