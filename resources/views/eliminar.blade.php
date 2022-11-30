@extends('plantilla')

    @section('contenido')

    <div class="container col-md-6 mt-4 mb-4">

        <div class="card text-center" style="width: 40rem;">
            <div class="card-body">
            <h5 class="card-title">¿Seguro que deseas eliminar este recuerdo?</h5>
            <p class="card-text"> <b> {{ $consultaId->titulo }} </b> <br> {{ $consultaId->recuerdo }} <br> <i> {{ $consultaId->fecha }} </i> </p>
            <form action="{{route('recuerdo.destroy', $consultaId->idRecuerdo)}}" method="POST">
                @csrf
                @method('delete')
                <a href="{{route('recuerdo.index')}}" class="btn btn-warning">Regresar</a>
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
            </div>
        </div>
    
    </div>

    @stop
    


    
