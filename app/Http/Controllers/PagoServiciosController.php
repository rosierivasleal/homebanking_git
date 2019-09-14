<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagoServiciosController extends Controller
{
    public function index(){
        return view('home.pagoServicios'); //home. porque estas view estan dentro de la carpeta home
    }
}
