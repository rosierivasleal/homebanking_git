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
                <a class="nav-item nav-link active" href="index.html">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="html/balance.html">Balance</a>
                <a class="nav-item nav-link" href="html/pagoServicios.html">Pago de Servicios</a>
                <a class="nav-item nav-link" href="html/inversiones.html">Inversiones</a>
            </div>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Pago de Servicios</h1>
            <p class="lead">Pagá lo que necesites, desde la comodidad de tu casa.</p>
        </div>
    </div>

    <<div class="alert alert-<?php echo isset($isSuccess) ? "success" : "danger" ?>" role="alert" 
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
            </div>

    <div class="container">
    <div class="row">
        <form method="post" action="#" class="col-md-10 col-md-offset-3 offset-4">
            <div class="col-5">
                <p class="m-1">Nombre del servicio</p>
                <div class="input-group mb-2">
                    <input type="text" class="form-control" name="serviceName" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-lg">
                </div>
                <p class="m-1">Número de Referencia</p>
                <div class="input-group mb-2">
                    <input type="text" class="form-control" name="numRef" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-lg">
                </div>
                <p class="m-1">Importe</p>
                <div class="input-group mb-2">
                    <input type="text" class="form-control" name="importe" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-lg">
                </div>
                <input class="btn btn-primary float-right" type="submit" value="Pagar Servicio">
            </div>
        </div>
        </form>
    </div>
    <div class="row">
        <h1>
            <?php
           
                // if(isset($_POST["username"])){
                //     $username = $_POST["username"];

                //     //casteo
                //     //$username = (int) $_POST["username"]; //para castearlo a un int.  podria ser un float o whatevs.

                //     if (empty($username)){
                //         echo "User vacio";
                //     }
                //     if ($username == ""){
                //         echo "User vacio";
                //     }
                //     else{
                //         echo "User " . $username;  //el tema es que esto igual va a tomar chars vacios (space) "   ";
                //     }
                                        
                // }
                
            ?>
        </h1>
    </div>
    <!-- <footer class="text-secondary bg-dark pt-3 pb-3 fixed-bottom">
        <div class="container text-center">
            <p>© PotatoTheft Tech., please don't Google us!</p>
        </div>
    </footer> -->

</body>

</html>