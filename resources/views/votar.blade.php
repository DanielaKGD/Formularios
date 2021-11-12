@extends('templates.master')

@section('header')
<h1><small>2.01. Realice un programa para determinar si una persona puede votar con base en su edad en las próximas elecciones.</small></h1>
@stop

@section('content')
<h3>
Edad = {{$edad}}
@if($edad>=18)
    <h1>Puede votar</h1>
@else
    <h1>No puede votar</h1>
@endif
@stop

@section('footer')
<h4 align="center">Pagina creada por Daniela Karina Garcia Dorado</h4>
@stop