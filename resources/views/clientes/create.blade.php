@extends('layouts.app')
@section('title','Cliente')
    

@section('content')
<form action="{{route('clientes.store')}}" method="post">
    @csrf

    <div class="mb-3">
        <label for="nif" class="form-label">Nif</label>
        <input type="text" class="form-control" id="nif" name="nif">
    </div>

    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre">
    </div>

    <div class="mb-3">
        <label for="direccion" class="form-label">Dirección</label>
        <input type="text" class="form-control" id="direccion" name="direccion">
    </div>

    <div class="mb-3">
        <label for="poblacion" class="form-label">Población</label>
        <input type="text" class="form-control" id="poblacion" name="poblacion">
    </div>

    <div class="mb-3">
        <label for="provincia" class="form-label">Provincia</label>
        <input type="text" class="form-control" id="provincia" name="provincia">
    </div>

    <div class="mb-3">
        <label for="cPostal" class="form-label">Código Postal</label>
        <input type="number" class="form-control" id="cPostal" name="cPostal">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>

    <div class="mb-3">
        <label for="telefono" class="form-label">Teléfono</label>
        <input type="text" class="form-control" id="telefono" name="telefono">
    </div>
    
    <button class="btn btn-outline-primary" name="enviar">Enviar</button><br>
</form>


@endsection