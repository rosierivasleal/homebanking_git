<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous">
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Potato Banking</a> <!-- aqui puede ir un logo, en el href -->
        <!-- Es el boton hamburguesa abajo. -->
        <!--  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button> -->
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="{{url('home/index')}}">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="{{url('home/balance')}}">Balance</a>
                <a class="nav-item nav-link" href="{{url('home/pagoservicios')}}">Pago de Servicios</a>
                <a class="nav-item nav-link" href="{{url('home/inversiones')}}">Inversiones</a>
            </div>
        </div>
    </nav>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Balance Financiero</h1>
            <p class="lead">Acá podés controlar los movimientos de tu cuenta</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Fecha</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Importe</th>
                            <th scope="col">Saldo</th>
                        </tr>
                    </thead>
                    <tbody>
                         <?php
                     $balance = [100, 1000, -200, 500, -600, 200, 1000, 500, -800, 600];
                     //$saldo = 0;
                     $saldoTotal = array_sum($balance);
                                  
                     foreach (array_reverse($balance) as $money => $value) {
                        //$saldo += $value;
                        $saldoTotal -= $value;

                        if ($money != 0 && $money != count($balance)-1){  //para no mostrar el primer y ultimo valor.
                          echo ' <tr class="table-borderless">
                                    <th scope="row">15/05/2019</th>
                                    <td>Salario</td>
                                    <td>' . $value . '</td>  
                                    <td>' . $saldoTotal . '</td>
                                </tr> ' ;
                        }
                    }
                   ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <footer class="text-secondary bg-dark pt-3 pb-3">
        <div class="container text-center">
            <p>© PotatoTheft Tech., please don't Google us!</p>
        </div>
    </footer>

    <?php

    // quise dejar la manera de hacerlo con for!
//     var_dump($balance[1]);

//    for ($i=0; $i < count($balance); $i++) { 
//        if($i > 0 && $i < count($balance)-1){  
//            if ($balance[$i] > 0){
//                echo "$" . $balance[$i] . "<br>";
//            } else {
//                echo "-$" . -($balance[$i]) . "<br>";  // -($money) es lo mismo que $money*-1
//            }
//        }
//    }
    ?>
    
</body>

</html>