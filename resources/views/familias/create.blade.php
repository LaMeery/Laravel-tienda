@extends('layouts.app')
@section('title','Familia')
    

@section('content')
{{-- {{route('productos.update',$producto)}} --}}
<form action="{{route('familias.store')}}" method="post">
    @csrf

    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion">
    </div>

    <button class="btn btn-outline-primary" name="enviar">Enviar</button><br>
</form>

@endsection