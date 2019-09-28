@extends('layouts.app', [
    'pageTitle' => 'Potato Banking',
    'pageSlogan' => 'Todo es mejor con Potato a tu lado.',
    'alignmentJumbotron' => 'text-center'
    ])
@section('content')

    <div class="row">
        <div class="col-4">
            <div class="card text-center"> <!-- style="width: 18rem; dejo el width libre para que sea responsive-->                    
                <img src="http://placekitten.com/250/250" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Balance</h5>
                    <p class="card-text">Mirá cómo vienen tus cuentas: Ingresos y Egresos.</p>
                    <a href="html/balance.html" class="btn btn-primary">Ver Situación Económica</a>
                </div>
            </div>
        </div>               
        <div class="col-4">
            <div class="card text-center">                   
                <img src="https://www.placecage.com/gif/250/250" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Pago de Servicios</h5>
                    <p class="card-text">Pagá todo lo que necesites desde la comodidad de tu casa.</p>
                    <a href="html/pagoServicios.html" class="btn btn-primary">Pagar Servicios</a>
                </div>
            </div>
        </div>       
        <div class="col-4">
            <div class="card text-center">                  
                <img src="http://placekitten.com/250/250" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Inversiones</h5>
                    <p class="card-text">Duplicá tus ahorros en el mercado financiero.</p>
                    <a href="html/inversiones.html" class="btn btn-primary">Invertir en Chips y Papas</a>
                </div>
            </div>
        </div>
    </div>
@endsection
