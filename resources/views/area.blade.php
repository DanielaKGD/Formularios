@extends('templates.master')

@section('header')
<h1><small>2.05. Realice un programa que, con base en una calificación proporcionada (0-10), indique con letra la calificación que le corresponde: • 10 es “A” • 9 es “B” • 8 es “C” • 7 y 6 son “D” • 5 a 0 son “F”
3.01. Un prof</small></h1>
@stop

@section('content')
<form action="{{route('calculaarea')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="inbase" class="form-label">Base</label>
        <input type="text" class="form-control" name="inbase" id="inbase">
    </div>
    <div class="mb-3">
        <label for="inaltura" class="form-label">Altura</label>
        <input type="text" class="form-control" name="inaltura" id="inaltura">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop

@section('footer')
<h4 align="center">Pagina creada por Daniela Karina Garcia Dorado</h4>
@stop