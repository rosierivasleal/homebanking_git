<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('home.index'); //home. porque estas view estan dentro de la carpeta home
    }
}
