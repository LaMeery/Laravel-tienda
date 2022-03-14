@extends('layouts.app')
@section('title','Producto')
    

@section('content')
{{-- {{route('productos.update',$producto)}} --}}
<form action="{{route('productos.update',$producto)}}" method="post">
    @csrf
    @method ('put')
    <div class="mb-3">
        <label for="id" class="form-label">ID</label>
        <input type="text" class="form-control" id="id" name="id" value="{{$producto->id}}" disabled>
    </div>

    <div class="mb-3">
        <label for="descripcion" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{$producto->descripcion}}">
    </div>

    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="text" class="form-control" id="precio" name="precio" value="{{$producto->precio}}">
    </div>

    
    <div class="mb-3">
        <label for="familia" class="form-label">Familia</label>
        <select name='familia_id' id='familia_id' >
        <option value="0" selected>Elige una familia</option>
        @foreach ($familias as $familia)
            <option value="{{$familia->id}}">{{$familia->descripcion}}</option>
        @endforeach
        </select><br>
    </div>
    <button class="btn btn-outline-primary" name="actualizar">Actualizar</button><br>
</form>
<br>
<form action="{{route('productos.destroy',$producto)}}" method="post">
    @csrf  <!-- TODOS LOS FORMULARIOS DE LARAVEL DEBEN LLEVAR ESTE @ -->
    @method('delete')
    <button class="btn btn-outline-danger" name="destroy">Eliminar</button>
</form>
<br>
<form action="{{route('productos.index')}}" method="">
    <button class="btn btn-outline-secondary" name="volver">Volver</button>
</form>

@endsection