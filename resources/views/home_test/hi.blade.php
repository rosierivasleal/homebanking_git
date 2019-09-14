<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset()}}">
</head>
<body>
    <h1>HIIIOO {{$name}} </h1> <!-- todo lo que es blade se escribe con dos llaves.  No hay que poner echo -->
    <img src="{{asset('img/imagen.png')}}" alt=""> <!--recordar que la carpeta img tiene que estar en public-->
</body>
</html>