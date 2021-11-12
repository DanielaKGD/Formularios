<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        .header-b{
            background-color:gainsboro
        }.nav-b{
            background-color:gainsboro
        }.content-b{
            background-color:lavender
        }.footer-b{
            background-color:gray
        }body {
    font-family: "Segoe UI", sans-serif;
    font-size:100%;
}.sidebar {
    position: fixed;height: 100%;width: 0;top: 0;left: 0;z-index: 1;
    background-color: #010101;
    overflow-x: hidden;
    transition: 0.4s;
    padding: 1rem 0;
    box-sizing:border-box;
}.sidebar .boton-cerrar {
    position: absolute;top: 0.5rem;right: 1rem;font-size: 2rem;display: block;
    padding: 0;
    line-height: 1.5rem;
    margin: 0;
    height: 32px;
    width: 32px;
    text-align: center;
    vertical-align: top;
}.sidebar ul, .sidebar li{
    margin:0;
    padding:0;
    list-style:none inside;
}.sidebar ul {
    margin: 4rem auto;
    display: block;
    width: 80%;
    min-width:200px;
}.sidebar a {
    display: block;
    font-size: 120%;
    color: white;
    text-decoration: none;
    
}.sidebar a:hover{
    color:black;
    background-color: red;
}
#contenido {
    transition: margin-left .4s;
    padding: 1rem;
}
.abrir-cerrar {
    color: red;
    font-size:1rem;   
}#abrir {
    
}#cerrar {
    display:none;
}
        </style>
</head>
<body class="header-b">
<div>
    @section('header')
    <h1>PAGINA PRINCIPAL</h1>
    @show
</div>

<div id="sidebar" class="sidebar">
<a href="#" class="boton-cerrar" onclick="ocultar()">&times;</a>
<ul class="menu"><small>
<li><a href="#">1.1. Calcular el área de un trapecio</a></li>
<li><a href="#">1.2. Cálcular de la apotema de un cuadrado</a></li>
<li><a href="#">1.3. Calcular el volumen de un cono</a></li>
<li><a href="#">2.01. Realice un programa para determinar si una persona puede votar con base en su edad en las
próximas elecciones.</a></li>
<li><a href="#">2.02. Realice un programa para determinar el sueldo semanal de un trabajador con base en las horas
trabajadas y el pago por hora, considerando que después de las 40 horas cada hora se considera como
excedente y se paga el doble.</a></li>
<li><a href="#">2.05. Realice un programa que, con base en una calificación proporcionada (0-10), indique con letra la
calificación que le corresponde: • 10 es “A” • 9 es “B” • 8 es “C” • 7 y 6 son “D” • 5 a 0 son “F”</a></li>
<li><a href="#">3.01. Un profesor tiene un salario inicial de $1500, y recibe un incremento de 10 % anual durante 6 años. ¿Cuál
es su salario al cabo de 6 años? ¿Qué salario ha recibido en cada uno de los 6 años? Realice un programa que
resuelva el problema.
</a></li>
<li><a href="#">3.05. Realice un programa para obtener la tabla de multiplicar de un entero K comenzando desde el 1.</a></li>
</small>
</ul>
</div>
<div id="contenido">
<a id="abrir" class="abrir-cerrar" href="javascript:void(0)" onclick="mostrar()">Abrir menu</a><a id="cerrar" class="abrir-cerrar" href="#" onclick="ocultar()">Cerrar menu</a>
</div>
<script>
function mostrar() {
    document.getElementById("sidebar").style.width = "300px";
    document.getElementById("contenido").style.marginLeft = "300px";
    document.getElementById("abrir").style.display = "none";
    document.getElementById("cerrar").style.display = "inline";
}
function ocultar() {
    document.getElementById("sidebar").style.width = "0";
    document.getElementById("contenido").style.marginLeft = "0";
    document.getElementById("abrir").style.display = "inline";
    document.getElementById("cerrar").style.display = "none";
}
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"69e2ee73ffaa3687","version":"2021.9.0","r":1,"token":"f0aa520dc035432cb9fe5438c4f03b8b","si":100}'></script>