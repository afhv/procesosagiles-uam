<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    //
    public function index() {
        //echo "Hola a todos";
        return view('sitio/index');
    }

    public function saludar(Request $request, $nombre , $edad = false) {
        return view('sitio/saludar', ['name' => $nombre, 'age' => $edad]);
        /*echo "Hola " . $nombre.". ";
        if ($edad) {
            echo "Tienes ". $edad . " años.";
        }*/
    }

}
