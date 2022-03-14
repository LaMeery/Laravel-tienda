@extends('layouts.app')

@section('title','Productos')

@section('content')
    

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>DESCRIPCIÓN</th>
            <th>PRECIO</th>
            <th>FAMILIA</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto)
        
            <tr>
                <td><a href="{{route('productos.edit',$producto->id)}}">{{$producto->id}}</a></td>
                <td> {{ $producto->descripcion }}</td>
                <td> {{ $producto->precio}}</td>
                <td> {{ $producto->familia_id}}</td>
            </tr>
        
        @endforeach
    </tbody>
</table>

@endsection