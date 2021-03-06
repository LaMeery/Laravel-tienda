<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Familia;
class AjaxController extends Controller
{
    public function producto(Request $request){

         $producto=Producto::find($request->input('id'));
        
        return response(json_encode($producto),200);
    }

    public function familia(Request $request){

        $familia=Familia::find($request->input('id'));
       
       return response(json_encode($familia),200);
   }
}
