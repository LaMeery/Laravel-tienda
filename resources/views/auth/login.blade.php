@extends('layouts.app2')

@section('title','Login')
@section('content')
<div class="container">
    
    <form action="{{route('login.store')}}" method="post">
            @csrf <!-- TODOS LOS FORMULARIOS DE LARAVEL DEBEN LLEVAR ESTE @ -->
            <div style="width:500px; margin:0 auto; border: 2px solid black; padding:15px; margin-top:20px; background-color: rgb(37, 37, 68); color: white;">
                <h4 class="text-center">LOGIN</h4>
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>    
          
                <div class="mb-3">
                  <label for="password" class="form-label">Contraseña</label>
                  <input type="password" class="form-control" id="password" name="password">
                </div>

                <button type="submit" class="btn btn-outline-primary">Sign in</button>
                <a class="btn btn-outline-primary" href="{{route('register.create')}}" role="button">Register</a>
            </div>
    </form>
</div>
@endsection