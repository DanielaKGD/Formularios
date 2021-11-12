@extends('templates.master')

@section('header')
<h1>2.02. Realice un programa para determinar el sueldo semanal de un trabajador con base en las horas trabajadas y el pago por hora, considerando que después de las 40 horas cada hora se considera como excedente y se paga el doble.</h1>
@stop

@section('content')
<h1>Sueldo de un trabajador con BLADE</h1>
Horas trabajadas = {{$h}}<br>
Pago por hora = {{$pph}}<br>
{{$s=$h*$pph}}
@if($h>40)
<h2>El sueldo es = {{$s=$s*2}}</h2>
@else
<h2>El sueldo es = {{$s}}</2>
@endif
@stop

@section('footer')
<h4 align="center">Pagina creada por Daniela Karina Garcia Dorado</h4>
@stop