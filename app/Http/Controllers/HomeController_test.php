<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController_test extends Controller
{
//    public function index($rol){ //pase el parametro de $rol desde web.php en routes.
//     return view('home_test');
//    }

   public function index($rol){
       if($rol == "admin"){
        return view('home_test.admin_test'); //home_test. porque esta dentro de la carpeta home_test
       } else {
        return view('home_test.user_test');   
       }
   }


   //tambien podemos pasarle variables a la vista.
   public function hi($name){
       return view('home_test.hi')->with('name', $name); //el primer parametro es el nombre de la variable que va a estar en el archivo de views.
   }
}
