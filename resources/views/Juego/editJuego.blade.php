@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Edicion datos juego {{$juego->nombre}}</h1>
            <div class="col-md-12">
                <form action="{{ route('juego.update',$juego->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre Juego</label>
                        <input type="text" class="form-control" name="nombre" value="{{$juego->nombre}}">
                        <small  class="form-text text-muted">in case of using an abbreviation, use an easy to identify</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">descripcion del Juego</label>
                        <input type="text" class="form-control" name="descripcion" value="{{$juego->descripcion}}">
                        <small  class="form-text text-muted">in case of using an abbreviation, use an easy to identify</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>
@endsection
