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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// ----------------------------------- EJEMPLOS METODOS DE API ---------------------//

//buscando una persona por el id.
Route::get('person/{id}/{name}', function ($id, $name) {  //esta funcion recibe parametros dinamicos.
    //return "Persona: " . $id . " " . $name;

    //json array:  
   $personById = [
       "status " => "ok",
       "code" => 1001, //por lo gral los codigos los inventamos nosotros.  En este caso el primer numero es de la entidad, el ultimo es en relacion al metodo (get, post, whatevs)
       "data" => "Persona " . $id . " " . $name
   ];
   return response()->json($personById);
});
   // ------------------- GET QUE DEVUELVE LISTA DE PERSONAS -----------------
      Route::get('person', function () { 
   
       //para devolver una lista de personas.  Hay que devolver una lista de arrays:  
      $personList = [
          "Kid", "Bristol", "Slippy"
      ];
      $response = [
          "status" => "ok",
          "code" => 1005,
          "data" => $personList
      ];
      return response()->json($response);


    });  //o sea, en el url lo busco con http://localhost:8000/person/522/tim  cualquier numero, cualquier persona.

Route::post('person', function () {  
    //return "Crear persona";

    $person = [
       "status " => "ok", //por concenso el status se pone en todods.
       "code" => 1002, 
       "data" => "Se crea una persona."
    ];

    return response()->json($person);
});

Route::put('person', function () {  //siempre estoy apuntando a la misma ruta: person.  solo lo cambie cuando llame por id en get.
    //return "Modifica una persona";
    $person = [
        "status " => "ok", //por concenso el status se pone en todods.
        "code" => 1003, 
        "data" => "Se modifica una persona."
     ];
 
     return response()->json($person);
});

Route::delete('person', function () {  
    //return "Elimina una persona";
    $person = [
        "status " => "ok", //por concenso el status se pone en todods.
        "code" => 1004, 
        "data" => "Se borra una persona."
     ];
 
     return response()->json($person);
});