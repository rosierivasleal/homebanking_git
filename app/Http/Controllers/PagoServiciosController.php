<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagoServiciosController extends Controller
{
    public function index(){
        return view('home.pagoServicios'); //home. porque esta view estan dentro de la carpeta home
    }

    public function formCheck(Request $request){
        $serviceName = $request->input('serviceName');
        $numRef = $request->input('numRef');
        $importe = $request->input('importe');
        

        if($serviceName == null){
            return view ('home.form');
        } else {
            if ($serviceName != "Potato"){
                return view('home.form')->with('error', 'Solo aceptamos servicios de tipo "Potato"');
            } else {
                return view ('home.form');
            }
        }
    }

    // -------------- el de abajo quedo innecesario por el form Check ---------------

    // public function getFormInfo(Request $request){ //Request es una clase, que esta incluida en la linea 5

    //     $attrs = [
    //         'serviceName' => $request->input('serviceName'),
    //         'numRef' => $request->input('numRef'),
    //         'importe' => $request->input('importe'),
    //     ];

    //     dd($request);

    //     //return view('home.registeredUsr') -> with($attrs); 
    // }

   
}
