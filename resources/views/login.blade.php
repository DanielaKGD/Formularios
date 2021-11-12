@extends('templates.master')

@section('header')
<h1><small>LOGIN</small></h1>
@stop

@section('content')
<form action="{{route('isesion')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="correo" class="form-label">Correo:</label>
        <input type="text" class="form-control" name="correo" id="correo">
    </div>
    <div class="mb-3">
        <label for="contrase" class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="contrase" id="contrase">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop

@section('footer')
<h4 align="center">Pagina creada por Daniela Karina Garcia Dorado</h4>
@stop