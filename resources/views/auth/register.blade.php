@extends('layouts.app2')

@section('title','Registrar')
@section('content')

<form action="{{route('register.store')}}" method="post">
        @csrf <!-- TODOS LOS FORMULARIOS DE LARAVEL DEBEN LLEVAR ESTE @ -->
        <div style="width:500px; margin:0 auto; border: 2px solid black; padding:15px; margin-top:20px; background-color: rgb(37, 37, 68); color: white;">
            <h4 class="text-center">REGISTER</h4>
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>    
            <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" >
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="password_confirmed" class="form-label">Confirmar contraseña</label>
                <input type="password" class="form-control" id="password_confirmed" name="password_confirmed">
            </div>
              
            <button type="submit" class="btn btn-outline-primary">Register</button>
            <a class="btn btn-outline-primary" href="{{route('login.create')}}" role="button">Log In</a>
        </div>
</form>
@endsection