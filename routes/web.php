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

// Route::get('/index', function () {
//     return view('index');  //laravel asume que va a tener .blade.php, no necesito especificar
// });

// Route::get('/balance', function () {
//     return view('balance');  
// });

// Route::get('/pagoServicios', function () {
//     return view('pagoServicios'); 
// });

// Route::get('/inversiones', function () {
//     return view('inversiones');  
// });

// // -----------------------------  este fue un test!
// Route::get('/home_test', function () {  
//     return view('home');
// });

// ---------------------- TEST ----------------------
Route::get('/home_test/{rol}', 'HomeController_test@index'); // el @ es la separacion entre el controlador y el metodo al que este apunta 
Route::get('/home_test/hi/{rol}', 'HomeController_test@hi');

// ------------------ RUTAS VIA CONTROLADORES --------------------
Route::get('/home/index', 'IndexController@index'); //el controlador y su funcion
Route::get('/home/balance', 'BalanceController@index');
Route::get('/home/inversiones', 'InversionesController@index');
Route::get('/home/pagoservicios', 'PagoServiciosController@index');

Route::post('/getFormInfo', 'PagoServiciosController@getFormInfo');
Route::post('/formCheck', 'PagoServiciosController@formCheck');