@extends('plantilla')

    @section('contenido')

        <div class="container mt-4">
            <div class="text-center mb-2">
                <h3>Actualizar Recuerdo</h3>
            </div>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{$error}}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>    
                @endforeach  
            @endif
            <div class="card text-center mt-4 mb-5">
                <div class="card-header">
                    Corregir recuerdo...
                </div>
                <div class="card-body">
                    <form action="{{route('recuerdo.update', $consultaId->idRecuerdo)}}" method="post">
                        @csrf
                        {!! method_field('PUT')!!}
                        <div class="mb-3 col-10 mx-auto">
                        <input class="form-control" type="text" placeholder="Titulo" name="txtTitulo" value="{{ $consultaId->titulo }}">
                        <p class="text-warning fst-Italic">{{ $errors->first('txtTitulo')}}</p>
                        </div>
                        <div class="mb-3 col-10 mx-auto">
                        <input class="form-control" type="text" placeholder="Recuerdo" name="txtRecuerdo" value="{{ $consultaId->recuerdo }}">
                        {{ $errors->first('txtRecuerdo')}}
                        </div>
                </div>
                <div class="card-footer text-muted">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" class="btn btn-info" name="btnActualizarRecuerdo">Actualizar Recuerdo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    @stop
    