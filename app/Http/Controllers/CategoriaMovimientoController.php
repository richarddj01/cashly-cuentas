<?php

namespace App\Http\Controllers;

use App\Models\categoria_movimiento;
use Illuminate\Http\Request;

class CategoriaMovimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = categoria_movimiento::all();

        return view('categoria_movimientos.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categoria_movimientos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'descripcion'=> 'required|string|min:3'
        ]);

        categoria_movimiento::create($request->all());

        return redirect()->route('categoria_movimientos.index')->with('success','Registro Guardado');
    }

    /**
     * Display the specified resource.
     */
    public function show(categoria_movimiento $categoria_movimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(categoria_movimiento $categoria_movimiento)
    {
        return view('categoria_movimientos.edit', compact('categoria_movimiento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, categoria_movimiento $categoria_movimiento)
    {
        $request->validate([
            'descripcion'=> 'required|string|min:3'
        ]);

        $categoria_movimiento->update($request->all());

        return redirect()->route('categoria_movimientos.index')->with('success','Actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(categoria_movimiento $categoria_movimiento)
    {
        $categoria_movimiento->delete();

        return redirect()->route('categoria_movimientos.index')->with('success','Eliminado correctamente');
    }
}
