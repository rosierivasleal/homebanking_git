<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $pageTitle }}</title> <!-- para que sea variable en cada vista -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>        
    <link rel="stylesheet" href="main.css" class="css">
</head>



<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Potato Banking</a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="{{url('home/index')}}">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="{{url('home/balance')}}">Balance</a>
                <a class="nav-item nav-link" href="{{url('home/pagoservicios')}}">Pago de Servicios</a>
                <a class="nav-item nav-link" href="{{url('home/inversiones')}}">Inversiones</a>
            </div>
        </div>
    </nav>

    <div class="jumbotron text-center">
        <h1 class="display-4">{{ $pageTitle }}</h1> <!-- estos son componentes del jumbotron -->
        <p class="lead">Todo es mejor con Potato a tu lado.</p>
    </div>

    <div class="container">
        @yield('content') <!-- aca es donde podemos tocar todo lo que no se repite -->
    </div>
    <div class='main'></div> <!-- este de la como un empujoncin abajo -->
    <!-- <footer class="footer-sticky bg-dark text-white-50">
        <div class="container text-white">
            <div class="row">
                <div class="col m-3">
                    <p class="text-center font-weight-light m-2">© 2019 Copyright: Coderhouse</p>
                </div>
            </div>
        </div>
    </footer> -->
</body>

</html>