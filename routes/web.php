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

Route::get('/', function () { // '/' es la vista de entrada de laravel. Es mi index
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');  //laravel asume que va a tener .blade.php, no necesito especificar
});

Route::get('/balance', function () {
    return view('balance');  
});

Route::get('/pagoServicios', function () {
    return view('pagoServicios'); 
});

Route::get('/inversiones', function () {
    return view('inversiones');  
});

// -----------------------------  este fue un test!
Route::get('/home', function () {  
    return view('home');
});

