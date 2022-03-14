<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes=Cliente::all();
        return view('clientes.index',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Cliente;
        $cliente->nif=$request->nif;
        $cliente->nombre=$request->nombre;
        $cliente->provincia=$request->provincia;
        $cliente->direccion=$request->direccion;
        $cliente->poblacion=$request->poblacion;
        $cliente->cPostal=$request->cPostal;
        $cliente->email=$request->email;
        $cliente->telefono=$request->telefono;
        $cliente->save();

        return redirect()->route('clientes.show',$cliente->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente=Cliente::find($id);
        return view('clientes.show',['cliente' => $cliente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente=Cliente::find($id);
        return view('clientes.edit',['cliente'=>$cliente]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Cliente $cliente, Request $request)
    {
        $cliente->nombre=$request->nombre;
        $cliente->provincia=$request->provincia;
        $cliente->direccion=$request->direccion;
        $cliente->poblacion=$request->poblacion;
        $cliente->cPostal=$request->cPostal;
        $cliente->email=$request->email;
        $cliente->telefono=$request->telefono;

        $cliente->update();

        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index');
    }
}
