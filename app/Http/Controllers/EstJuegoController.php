<?php

namespace App\Http\Controllers;

use App\EstJuego;
use Illuminate\Http\Request;

class EstJuegoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        //autentifica que el usuario este loguiado (evita el user guest)
        $this->middleware('auth');
    }


    public function index()
    {
        $est= EstJuego::all();
        return view('EstJuego.indexEstJuego',compact('est'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('EstJuego.createEstJuego');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $est = new EstJuego();
        $est->id_user = $request->input('id_user');
        $est->id_juego = $request->input('id_juego');
        $est->comentario = $request->input('comentario');
        $est->save();
        return redirect()->route('Estjuego.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EstJuego  $estJuego
     * @return \Illuminate\Http\Response
     */
    public function show(EstJuego $estJuego)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EstJuego  $estJuego
     * @return \Illuminate\Http\Response
     */
    public function edit(EstJuego $estJuego)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EstJuego  $estJuego
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EstJuego $estJuego)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EstJuego  $estJuego
     * @return \Illuminate\Http\Response
     */
    public function destroy($estjuego)
    {
        $delete = EstJuego::find($estjuego)->delete();
        return redirect()->route('Estjuego.index');
    }
}
