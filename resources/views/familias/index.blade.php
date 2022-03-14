@extends('layouts.app')

@section('title','Familia')

@section('content')
    

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>DESCRIPCIÓN</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($familias as $familia)
        
            <tr>
                <td><a href="{{route('familias.edit',$familia->id)}}">{{$familia->id}}</a></td>
                <td> {{ $familia->descripcion }}</td>
            </tr>
        
        @endforeach
    </tbody>
</table>

@endsection