@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <h1>Agregar nuevo juego</h1>
            <div class="col-md-12">
                <form action="{{ route('juego.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre Juego</label>
                        <input type="text" class="form-control" name="nombre">
                        <small  class="form-text text-muted">in case of using an abbreviation, use an easy to identify</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">descripcion del Juego</label>
                        <input type="text" class="form-control" name="descripcion">
                        <small  class="form-text text-muted">in case of using an abbreviation, use an easy to identify</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>

@endsection
