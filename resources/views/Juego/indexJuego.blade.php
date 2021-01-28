@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 row" >
                <h1 class="col-md-10">vista general de juegos en sistema</h1>
                <a class="btn btn-info col-md-2" href="{{ route('juego.create') }}">Crear nuevo juego</a>
            </div>

            <table class="table table-responsive-sm">
                <tr>
                    <th>Nombre del Juego</th>
                    <th>Descripcion</th>
                    <th>Acction</th>
                </tr> @foreach($juegos_all as $juego)
                    <tr>
                        <td>{{ $juego->nombre }}</td>
                        <td>{{ $juego->descripcion }}</td>
                        <td>
                            <form action="{{ route('juego.destroy',$juego->id) }}" method="POST">
                                <a class="btn btn-warning" href="{{ route('juego.edit',$juego->id) }}">edit</a>
                                <!--selector multiples edicion de datos-->
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </table>

        </div>
    </div>

@endsection
