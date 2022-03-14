@extends('layouts.app')
@section('title','Cliente')
    

@section('content')
<form action="{{route('clientes.update',$cliente)}}" method="post">
    @csrf
    @method ('put')
    <div class="mb-3">
        <label for="id" class="form-label">ID</label>
        <input type="text" class="form-control" id="id" name="id" value="{{$cliente->id}}" disabled>
    </div>

    <div class="mb-3">
        <label for="nif" class="form-label">Nif</label>
        <input type="text" class="form-control" id="nif" name="nif" value="{{$cliente->nif}}" disabled>
    </div>

    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{$cliente->nombre}}">
    </div>

    <div class="mb-3">
        <label for="direccion" class="form-label">Dirección</label>
        <input type="text" class="form-control" id="direccion" name="direccion" value="{{$cliente->direccion}}">
    </div>

    <div class="mb-3">
        <label for="poblacion" class="form-label">Población</label>
        <input type="text" class="form-control" id="poblacion" name="poblacion" value="{{$cliente->poblacion}}">
    </div>

    <div class="mb-3">
        <label for="provincia" class="form-label">Provincia</label>
        <input type="text" class="form-control" id="provincia" name="provincia" value="{{$cliente->provincia}}">
    </div>

    <div class="mb-3">
        <label for="cPostal" class="form-label">Código Postal</label>
        <input type="number" class="form-control" id="cPostal" name="cPostal" value="{{$cliente->cPostal}}">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{$cliente->email}}">
    </div>

    <div class="mb-3">
        <label for="telefono" class="form-label">Teléfono</label>
        <input type="text" class="form-control" id="telefono" name="telefono" value="{{$cliente->telefono}}">
    </div>
    
    <button class="btn btn-outline-primary" name="actualizar">Actualizar</button><br>
</form>
<form action="{{route('clientes.index')}}" method="">
    <button class="btn btn-outline-secondary" name="volver">Volver</button>
</form>


@endsection