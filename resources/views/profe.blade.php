@extends('templates.master')

@section('header')
<h1>3.01. Un profesor tiene un salario inicial de $1500, y recibe un incremento de 10 % anual durante 6 años. ¿Cuál es su salario al cabo de 6 años? ¿Qué salario ha recibido en cada uno de los 6 años? Realice un programa que resuelva el problema.</h1>
@stop

@section('content')

<h1>El sueldo de un profesor con BLADE</h1>

El sueldo es= {{$si}}
@for($an=1;$an<=6;$an++)
    {{$aum=(10*$si)/100;}}
<h2>El salario final del año {{$an}} es $ {{$si=$si+$aum}}
@endfor
@stop

@section('footer')
<h4 align="center">Pagina creada por Daniela Karina Garcia Dorado</h4>
@stop