@extends('layouts.app')
@section('title','Facturar')
    

@section('content')

<form action="{{route('facturas.update',$factura)}}" method="post">
    @csrf
    @method ('put')
    <div class="row">
        <div class="offset-md-3 col-md-3">
            <label for="id" class="form-label">Número</label>
            <input type="number" class="form-control" name='numero' size=6 value="{{$factura->numero}}" disabled/>

        </div>
        <div class="col-md-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" class="form-control" name='fecha' value="{{$factura->fecha}}"/>
        </div>
        <div class="offset-md-3 col-md-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name='nombre' size="50" value="{{$factura->nombre}}"/>
        </div>
        <div class="col-md-3">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" class="form-control" name='direccion' size="50" value="{{$factura->direccion}}"/>
        </div>
        <div class="offset-md-3 col-md-3">
            <label for="poblacion" class="form-label">Población</label>
            <input type="text" class="form-control" name='poblacion' value="{{$factura->poblacion}}"/>
        </div>
        <div class="col-md-3">
            <label for="provincia" class="form-label">Provincia</label>
            <input type="text" class="form-control" name='provincia' value="{{$factura->provincia}}"/>
        </div>
        <div class="offset-md-3 col-md-3">
            <label for="cpostal" class="form-label">C. Postal</label>
            <input type="text" class="form-control" name='cpostal' size=5 value="{{$factura->cpostal}}"/>
        </div>
        <div class="col-md-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type='text' class="form-control" name='telefono' value="{{$factura->telefono}}"/>
        </div>
    
    </div>
    <br>
    <div>
        <button class="btn btn-outline-primary col-md-2 offset-md-5" name="actualizar">Actualizar</button><br>
    </div>
 </form>
<br>
<br>
<form action="{{route('lineas.update',$factura)}}" method="post" id="form_linea">
    @csrf
    @method ('put')
    <div class="row">
        <input type="hidden" name='factura_numero' id='factura_numero' size="50" value={{$factura->numero}}/>
        <div class="offset-md-3 col-md-3">
            <label for="producto_id" class="form-label">Producto</label>
            <select class="form-control" name='producto_id' id='producto_id' >
                <option value="0" selected>Elige un producto</option>
                @foreach ($productos as $producto)
                    <option value="{{$producto->id}}">{{$producto->descripcion}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <input type="text" class="form-control" name='descripcion' id="descripcion" value=""/>
        </div>
        <div class="offset-md-3 col-md-3">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="text" class="form-control" name='cantidad' id="cantidad" value="1"/>
        </div>
        <div class="col-md-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="text" class="form-control" name='precio' id="precio" value=""/>
        </div>
    </div>

    <br>
    <div>
        <button class="btn btn-outline-primary col-md-2 offset-md-5" name="Añadir">Añadir</button>
    </div>
</form>
<br><br>

</table>
<table class="table">
    <thead>
        <tr>
            <th>Descripción</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Importe</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($factura->lineas as $linea)
        
            <tr>
                <td>{{$linea->descripcion}}</td>
                <td>{{$linea->cantidad}}</td>
                <td>{{$linea->precio}}</td>
                <td>{{$linea->cantidad*$linea->precio}}</td>
            </tr>
        
        @endforeach
    </tbody>
</table>
@endsection
@section('scripts')
    <script>


    

$(document).ready(function(){
		
	$("#producto_id").change(function(){
 

        $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
	
        var id=$("select[name=producto_id]").val();
        if (id!=0){
        $.ajax({
            url: '{{route('ajax.producto')}}',
            method:'post',
            data:{'id':id},
            success:function(data){
                var datos=JSON.parse(data);
                $("#precio").val(datos.precio);
                $("#descripcion").val(datos.descripcion);
                
            }
        });

        }else{
            alert("Producto no seleccionado");
        }
            
        });
    });
    </script>

@endsection