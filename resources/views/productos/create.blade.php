@extends('layouts.app')
@section('title','Producto')
    

@section('content')
{{-- {{route('productos.update',$producto)}} --}}
<form action="{{route('productos.store')}}" method="post">
    @csrf

    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion">
    </div>

    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="text" class="form-control" id="precio" name="precio">
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
    <button class="btn btn-outline-primary" name="enviar">Enviar</button><br>
</form>

@endsection