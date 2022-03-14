<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Linea;
use App\Models\Producto;
use App\Models\Factura;

class LineaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Factura $factura, Request $request)
    {
        $factura=Factura::find($request->factura_numero);
        $productos=Producto::all();
        $linea = new Linea;
        $linea->descripcion=$request->descripcion;
        $linea->cantidad=$request->cantidad;
        $linea->precio=$request->precio;
        $linea->factura_numero=$factura->numero;
        $linea->producto_id=$request->producto_id;
        $linea->save();

        
        return view('factura',['factura'=>$factura,'productos'=>$productos]);
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
