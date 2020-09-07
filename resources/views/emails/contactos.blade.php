<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<img src="{{ $poster}}" alt="" height="400px"><br>
<a><b>Titulo:</b> {{$t}} </a><br>
<a><b>Año:</b> {{$year}} </a><br>
<a><b>Director:</b> {{$director}} </a>
<a><b>Synopsis:</b> {{$synopsis}} </a>



</body>
</html>
<!-- esto es el contenido que se envia  en el mail que se recibe-->