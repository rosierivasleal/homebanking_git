<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BalanceController extends Controller
{
    public function index(){
        return view('home.balance'); //home. porque estas view estan dentro de la carpeta home
    }
}
