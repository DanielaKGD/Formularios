@extends('templates.master')

@section('header')
<h1>3.05. Realice un programa para obtener la tabla de multiplicar de un entero K comenzando desde el 1.</h1>
@stop

@section('content')
Tabla del = {{$n}}

@for($c=1;$c<=10;$c++)
    <h4>La multiplicacion es: {{$r=$n*$c}}</h4>
 @endfor
@stop

@section('footer')
<h4 align="center">Pagina creada por Daniela Karina Garcia Dorado</h4>
@stop