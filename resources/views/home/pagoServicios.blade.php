
@extends('layouts.app', [
    'pageTitle' => 'Pago de Servicios',
    'pageSlogan' => 'Pagá lo que necesites, desde la comodidad de tu casa.'
    ])
@section('content')


<?php
    if(isset($_POST["serviceName"])){
        $service = $_POST["serviceName"];

        if($service == "Potato"){
            $isSuccess = true;
        } else {
            $isSuccess = false;
        }
    }
?>


<!-- <<div class="alert alert-<?php echo isset($isSuccess) ? "success" : "danger" ?>" role="alert" 
        style="
            <?php
                if(isset($_POST["serviceName"])) {
                    echo "display:block;";
                } else {
                    echo "display:none;";
                }
            ?>
        ">
            Solo aceptamos servicios de tipo "Potato"!
</div> -->

<div class="container">
                @isset($error)
                <div class="alert alert-danger" role="alert">
                    {{ $error}}
                </div>
                @endisset
</div>

<div class="row">
    <form method="post" action="{{ url('getFormInfo') }}" class="col-md-10 col-md-offset-3 offset-4">
        <div class="col-5">
            <p class="m-1">Nombre del servicio</p>
            <div class="input-group mb-2">
                <input type="text" class="form-control" name="serviceName" id="serviceName" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-lg">
            </div>
            <p class="m-1">Número de Referencia</p>
            <div class="input-group mb-2">
                <input type="text" class="form-control" name="numRef" id="numRef" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-lg">
            </div>
            <p class="m-1">Importe</p>
            <div class="input-group mb-2">
                <input type="text" class="form-control" name="importe" id="importe" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-lg">
            </div>
            <input class="btn btn-primary float-right" type="submit" value="Pagar Servicio">
        </div>
    </form>
</div>

@endsection