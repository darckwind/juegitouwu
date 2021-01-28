@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 row">
                <h1 class="col-md-10">Tus Juegos guardados</h1>
                <a class="btn btn-info col-md-2" href="{{ route('Estjuego.create') }}">Crear nuevo juego</a>

            </div>
            <br><br><br>
            @foreach($est as $data)
                @if(Auth::user()->id == $data->id_user)
                    <div class="col-md-4">
                        <div class="card" >
                            <div class="card-body">
                                <h5 class="card-title">Save {{\App\juego::find($data->id_juego)->nombre}}</h5>
                                <p class="card-text">{{$data->comentario}}</p>
                                <p class="card-text">Fecha publicaion: {{$data->created_at}}</p>
                                <form action="{{ route('Estjuego.destroy', $data->id  )}}" method="POST">
                                    <!--selector multiples edicion de datos-->
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
