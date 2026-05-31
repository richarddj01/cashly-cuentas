<?php

namespace App\Http\Controllers;

use App\Models\cuenta;
use Illuminate\Http\Request;

class CuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cuentas = Cuenta::all();

        return view("cuentas.index", compact("cuentas"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cuentas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'descripcion' =>'required|string|min:3',
            'saldo_inicial' => 'nullable|numeric',
        ]);

        cuenta::create($request->all());

        return redirect()->route('cuentas.index')->with('success','Cuenta guardada');
    }

    /**
     * Display the specified resource.
     */
    public function show(cuenta $cuenta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cuenta $cuenta)
    {
        return view('cuentas.edit', compact('cuenta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cuenta $cuenta)
    {
        $request->validate([
            'descripcion' =>'required|string|min:3',
            'saldo_inicial' => 'nullable|numeric',
        ]);
        $cuenta->update($request->all());
        return redirect()->route('cuentas.index')->with('success','Actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cuenta $cuenta)
    {
        $cuenta->delete();
        return redirect()->route('cuentas.index')->with('success','Eliminado con exito');
    }
}
