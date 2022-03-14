<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura;
use App\Models\Producto;
use App\Models\Cliente;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facturas=Factura::all();
      
        return view('lista',['facturas'=>$facturas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes=Cliente::all();
        return view('create',['clientes'=>$clientes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $factura = new Factura;
        $d=rand(1,999);
        $factura->numero=$d;
        $factura->fecha=$request->fecha;
        $factura->nombre=$request->nombre;
        $factura->direccion=$request->direccion;
        $factura->cpostal=$request->cpostal;
        $factura->poblacion=$request->poblacion;
        $factura->provincia=$request->provincia;
        $factura->telefono=$request->telefono;
        $factura->cliente_id=$request->cliente_id;
        $factura->save();

        return redirect()->route('facturas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($num)
    {
        $factura=Factura::find($num);
       $productos=Producto::all();
        return view('factura',['factura'=>$factura,'productos'=>$productos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $num
     * @return \Illuminate\Http\Response
     */
    public function update(Factura $factura, Request $request)
    {
        $factura->fecha=$request->fecha;
        $factura->nombre=$request->nombre;
        $factura->direccion=$request->direccion;
        $factura->cpostal=$request->cpostal;
        $factura->poblacion=$request->poblacion;
        $factura->provincia=$request->provincia;
        $factura->telefono=$request->telefono;
        $factura->cliente_id=$request->cliente_id;

        $factura->update();

        return redirect()->route('facturas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
