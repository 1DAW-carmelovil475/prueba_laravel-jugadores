<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jugadores = Jugador::all();
        return view('jugadores.index', compact('jugadores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jugadores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'nombre'   => 'required|min:3|max:12',
            'posicion' => 'required',
            'dorsal'   => 'required|integer|min:1|max:99',
        ]);

        Jugador::create([
            'nombre'   => $request->nombre,
            'posicion' => $request->posicion,
            'dorsal'   => $request->dorsal,
        ]);

        return redirect()->route('jugadores.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jugador $jugador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jugador $jugador)
    {
        return view('jugadores.edit', compact('jugador'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jugador $jugador)
    {

        $request->validate([
            'nombre'   => 'required|min:3|max:12',
            'posicion' => 'required',
            'dorsal'   => 'required|integer|min:1|max:99',
        ]);

        $jugador->update([
            'nombre'   => $request->nombre,
            'posicion' => $request->posicion,
            'dorsal'   => $request->dorsal,
        ]);

        return redirect()->route('jugadores.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jugador $jugador)
    {
        $jugador->delete();

        return redirect()->route('jugadores.index');
    }
}
