<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Inversiones</title>

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
                <a class="nav-item nav-link active" href="index.html">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="html/balance.html">Balance</a>
                <a class="nav-item nav-link" href="html/pagoServicios.html">Pago de Servicios</a>
                <a class="nav-item nav-link" href="html/inversiones.html">Inversiones</a>
            </div>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Inversiones</h1>
            <p class="lead">Duplicamos tus ahorros en el mercado financiero.</p>
        </div>
    </div>


    <div class="container">
        <table class="table">
            <thead>
                <tr>

                    <th scope="col">Empresa</th>
                    <th scope="col">Acciones</th>
                    <th scope="col">Valor de Acción</th>
                    <th scope="col">CompraVenta de Acción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Arcos Dorados</td>
                    <td>100</td>
                    <td>100</td>
                    <td class="row">
                        <p class="btn btn-primary">Comprar</p>
                        <p class="btn btn-success ml-3">Vender</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <footer class="text-secondary bg-dark fixed-bottom">
        <div class="container text-center">
            <!-- <p class="float-right">
                <a class="text-info" href="#">Back to top</a>
            </p> -->
            <p>© PotatoTheft Tech., please don't Google us!</p>
        </div>
    </footer>
</body>

</html>