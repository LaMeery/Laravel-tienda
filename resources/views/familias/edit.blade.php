@extends('layouts.app')
@section('title','Producto')
    

@section('content')
{{-- {{route('productos.update',$producto)}} --}}
<form action="{{route('familias.update',$familia)}}" method="post">
    @csrf
    @method ('put')
    <div class="mb-3">
        <label for="id" class="form-label">ID</label>
        <input type="text" class="form-control" id="id" name="id" value="{{$familia->id}}" disabled>
    </div>

    <div class="mb-3">
        <label for="descripcion" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{$familia->descripcion}}">
    </div>

    <button class="btn btn-outline-primary" name="actualizar">Actualizar</button><br>
</form>
<br>
<form action="{{route('familias.destroy',$familia)}}" method="post">
    @csrf  <!-- TODOS LOS FORMULARIOS DE LARAVEL DEBEN LLEVAR ESTE @ -->
    @method('delete')
    <button class="btn btn-outline-danger" name="destroy">Eliminar</button>
</form>
<br>
<form action="{{route('familias.index')}}" method="">
    <button class="btn btn-outline-secondary" name="volver">Volver</button>
</form>

@endsection