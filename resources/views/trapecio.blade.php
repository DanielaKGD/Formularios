@extends('templates.master')

@section('header')
<h1>1.1 Calcular el area de un trapecio</h1>
@stop
@section('content')
<h3>
<form action="" method="GET">
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