@extends('layouts.app')

@section('title','Productos')

@section('content')
    

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NIF</th>
            <th>NOMBRE</th>
            <th>DIRECCION</th>
            <th>POBLACION</th>
            <th>PROVINCIA</th>
            <th>C POSTAL</th>
            <th>EMAIL</th>
            <th>TELEFONO</th>
        </tr>
    </thead>
    <tbody>
        
        <tr>
            <td>{{$cliente->id}}</td>
            <td>{{ $cliente->nif }}</td>
            <td>{{ $cliente->nombre}}</td>
            <td>{{ $cliente->direccion}}</td>
            <td>{{ $cliente->poblacion}}</td>
            <td>{{ $cliente->provincia}}</td>
            <td>{{ $cliente->cPostal}}</td>
            <td>{{ $cliente->email}}</td>
            <td>{{ $cliente->telefono}}</td>
        </tr>
        
       
    </tbody>
</table>

<form action="{{route('clientes.edit',$cliente->id)}}">
    <button class="btn btn-outline-primary" type="submit" name="editar">Editar</button>
</form>
<br>
<form action="{{route('clientes.index')}}" method="">
    <button class="btn btn-outline-secondary" name="volver">Volver</button>
</form>
<br>
<form action="{{route('clientes.destroy',$cliente)}}" method="post">
    @csrf  <!-- TODOS LOS FORMULARIOS DE LARAVEL DEBEN LLEVAR ESTE @ -->
    @method('delete')
    <button class="btn btn-outline-danger" name="destroy">Eliminar</button>
</form>
@endsection