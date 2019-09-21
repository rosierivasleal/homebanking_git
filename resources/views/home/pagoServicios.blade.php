<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <title>Pago de Servicios</title>
</head>

<?php
    if(isset($_POST["serviceName"])){
        $service = $_POST["serviceName"];

        if($service == "Potato"){
            $isSuccess = true;
        } else {
            $isSuccess = false;
        }
    }

    // function error(){
        //     echo "ingrese un nombre de servicio";
        // }
?>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Potato Banking</a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="{{url('home/index')}}">Home</a>
                <a class="nav-item nav-link" href="{{url('home/balance')}}">Balance</a>
                <a class="nav-item nav-link" href="{{url('home/pagoservicios')}}">Pago de Servicios <span class="sr-only">(current)</span> </a>
                <a class="nav-item nav-link" href="{{url('home/inversiones')}}">Inversiones</a>
            </div>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Pago de Servicios</h1>
            <p class="lead">Pagá lo que necesites, desde la comodidad de tu casa.</p>
        </div>
    </div>

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

    <!-- <footer class="text-secondary bg-dark pt-3 pb-3 fixed-bottom">
        <div class="container text-center">
            <p>© PotatoTheft Tech., please don't Google us!</p>
        </div>
    </footer> -->

</body>

</html>