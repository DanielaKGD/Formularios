<?php use App\Http\Controllers\Neurolink;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla</title>
    <style>
        .header-b{
            background-color:gainsboro
        }.nav-b{
            background-color:gold
        }.content-b{
            background-color:lavender
        }.footer-b{
            background-color:gray
        }</style>
</head>
<body class="header-b">
<div>
    Pagina de plantilla
</div>
<nav class="nav-b">
    <ul>
        <li>Inicio</li>
        <li>Otra liga</li>
    </ul>
</nav>
<div class="content-b">Contenido de la pagina</div>
<ul>
<li>Secuenciales</li>
<li><a href="{{route('cono')}}">Cono</a></li>
<li><a href="{{route('trapecio')}}">Trapecio</a></li>
<li><a href="{{route('apotema')}}">Apotema</a></li>
<li>Decisiones</li>
<li><a href="{{route('votar')}}">Votar</a></li>
<li><a href="{{route('sueldo')}}">Sueldo</a></li>
<li><a href="{{route('calif')}}">Calificaciones</a></li>
<li>Ciclos</li>
<li><a href="{{route('profe')}}">Sueldo de profesor</a></li>
</ul>
</body>
<footer class="footer-b">Made by Daniela Garcia</footer>
</html>