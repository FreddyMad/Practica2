@extends('plantilla')

    @section('contenido')

        @if (session()->has('confirmacion'))
            {!!"<script> Swal.fire(
                'Correcto!',
                'Tu recuerdo se ha guardado!',
                'success'
              )</script>"!!}
        @endif

        <div class="container mt-4">
            <div class="text-center mb-2">
                <h3>Registrar Nuevo Recuerdo</h3>
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
                    Querido diario...
                </div>
                <div class="card-body">
                    <form action="{{route('recuerdo.store')}}" method="post">
                        @csrf
                        <div class="mb-3 col-10 mx-auto">
                        <input class="form-control" type="text" placeholder="Titulo" name="txtTitulo" value="{{old('txtTitulo')}}">
                        <p class="text-warning fst-Italic">{{ $errors->first('txtTitulo')}}</p>
                        </div>
                        <div class="mb-3 col-10 mx-auto">
                        <input class="form-control" type="text" placeholder="Recuerdo" name="txtRecuerdo" value="{{old('txtRecuerdo')}}">
                        {{ $errors->first('txtRecuerdo')}}
                        </div>
                </div>
                <div class="card-footer text-muted">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" class="btn btn-info" name="btnAgregarRecuerdo">Agregar Recuerdo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    @stop
    