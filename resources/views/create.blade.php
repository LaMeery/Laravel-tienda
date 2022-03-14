@extends('layouts.app')
@section('title','Factura')
    

@section('content')
<form action="{{route('facturas.store')}}" method="post">
    @csrf

    <div class="mb-3">
        <label for="fecha" class="form-label">Fecha</label>
        <input type="date" class="form-control" id="fecha" name="fecha">
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
        <label for="cpostal" class="form-label">Código Postal</label>
        <input type="number" class="form-control" id="cpostal" name="cpostal">
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
        <label for="telefono" class="form-label">Teléfono</label>
        <input type="text" class="form-control" id="telefono" name="telefono">
    </div>

    <div class="mb-3">
        <label for="cliente" class="form-label">Cliente</label>
        <select name='cliente_id' id='cliente_id' >
        <option value="0" selected>Elige un cliente</option>
        @foreach ($clientes as $cliente)
            <option value="{{$cliente->id}}">{{$cliente->nif." ".$cliente->nombre}}</option>
        @endforeach
        </select><br>
    </div>
    
    <button class="btn btn-outline-primary" name="enviar">Enviar</button><br>
</form>


@endsection