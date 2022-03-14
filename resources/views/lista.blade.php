@extends('layouts.app')

@section('title','Facturas')

@section('content')
    

<table class="table">
    <thead>
        <tr>
            <th>Número</th>
            <th>Fecha</th>
            <th>Cliente</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($facturas as $factura)
        
            <tr>
                <td><a href="{{route('facturas.edit',$factura->numero)}}">{{$factura->numero}}</a></td>
                <td> {{ $factura->fecha }}</td>
                <td> {{ $factura->nombre}}</td>
            </tr>
        
        @endforeach
    </tbody>
</table>
@endsection