<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    //
    public function index() {
        echo "Hola a todos";
    }

    public function saludar(Request $request, $nombre) {
        echo "Hola " . $nombre;
    }
}
