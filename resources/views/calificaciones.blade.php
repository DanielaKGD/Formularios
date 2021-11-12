@extends('templates.master')

@section('header')
<h1><small>2.05. Realice un programa que, con base en una calificación proporcionada (0-10), indique con letra la calificación que le corresponde: • 10 es “A” • 9 es “B” • 8 es “C” • 7 y 6 son “D” • 5 a 0 son “F”
3.01. Un prof</small></h1>
@stop

@section('content')
<h1>Calificaciones con BLADE</h1>
calificacion = {{$cal}}
@if($cal==10)
<h2>Su calificacion es A</h2>
@elseif($cal==9)
    <h2>Su calificacion es B</h2>
@elseif($cal==8)
    <h2>Su calificacion es C</h2>
@elseif($cal>=6 && $cal<=7)
    <h2>Su calificacion es D</h2>
@else
    <h2>Su calificacion es F</h2>
@endif
@stop

@section('footer')
<h4 align="center">Pagina creada por Daniela Karina Garcia Dorado</h4>
@stop