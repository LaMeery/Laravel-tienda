@extends('layouts.app')

@section('title','Clientes')

@section('content')
    

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NIF</th>
            <th>NOMBRE</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
        
            <tr>
                <td><a href="{{route('clientes.show',$cliente->id)}}">{{$cliente->id}}</a></td>
                <td> {{ $cliente->nif }}</td>
                <td> {{ $cliente->nombre}}</td>
            </tr>
        
        @endforeach
    </tbody>
</table>

@endsection