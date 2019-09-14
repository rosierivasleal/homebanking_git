<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//nombre servicio referencia importes.

Route::get('pagoServicios', function () { 

   $serviceList = [
       // asi devolvemos objetos
       [
        "Servicioooooo" =>"Agua",
        "Valor" => 500, 
       ],
       [
        "Servicio" =>"Luz",
        "Valor" => 450, 
       ],
       [
        "Servicio" =>"IIBB",
        "Valor" => 1200, 
       ]
   ];
   $response = [
       "status" => "ok",
       "code" => 1005,
       "data" => $serviceList
   ];
   return response()->json($response);
 });

Route::post('pagoServicios', function () {  
     $service = [
       "status" => "ok", //por concenso el status se pone en todods.
       "code" => 1002, 
       "data" => "Ha creado un nuevo servicio."
    ];

    return response()->json($service);
});

Route::delete('pagoServicios', function () {  
    $service = [
      "status" => "ok", //por concenso el status se pone en todods.
      "code" => 1002, 
      "data" => "Se ha borrado un servicio."
   ];

   return response()->json($service);
});
