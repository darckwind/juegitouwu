<?php

namespace App\Http\Controllers;

use App\juego;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JuegoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $juegos_all = juego::all();
        return view('Juego.indexJuego',compact('juegos_all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Juego.createJuego');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required'
        ]);

        $juego =  new juego();
        $juego->nombre = $request->input('nombre');
        $juego->descripcion = $request->input('descripcion');
        $juego->save();
        return redirect()->route('juego.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\juego  $juego
     * @return \Illuminate\Http\Response
     */
    public function show(juego $juego)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\juego  $juego
     * @return \Illuminate\Http\Response
     */
    public function edit(juego $juego)
    {
        return view('Juego.editJuego',compact('juego'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\juego  $juego
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, juego $juego)
    {
        $request->validate([
            'nombre' => 'required'
        ]);

        $juego->nombre = $request->input('nombre');
        $juego->descripcion = $request->input('descripcion');
        $juego->save();

        return redirect()->route('juego.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\juego  $juego
     * @return \Illuminate\Http\Response
     */
    public function destroy(juego $juego)
    {
        $juego->delete();
        return redirect()->route('juego.index');
    }
}
