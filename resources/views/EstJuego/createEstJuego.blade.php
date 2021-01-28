@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Agregar Guardado de juego</h1>
            <div class="col-md-12">
                <form action="{{ route('Estjuego.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Juegos disponibles</label>
                        <select class="form-control" name="id_juego">
                            @foreach(\App\juego::all() as $juego)
                                <option value="{{$juego->id}}">{{$juego->nombre}}</option>
                            @endforeach
                        </select>
                        <input type="text" value="{{Auth::user()->id}}" class="form-control" name="id_user" hidden>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">comentrario del Juego</label>
                        <textarea maxlength="140" type="text" class="form-control" name="comentario"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>
@endsection
