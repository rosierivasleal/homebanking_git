<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InversionesController extends Controller
{
    public function index(){
        return view('home.inversiones'); //home. porque estas view estan dentro de la carpeta home
    }
}
