@extends('plantilla')

    @section('contenido')

        @if (session()->has('actualizacion'))
            {!!"<script> Swal.fire(
                'Correcto!',
                'Tu recuerdo se ha actualizado!',
                'success'
              )</script>"!!}
        @endif

        @if (session()->has('eliminacion'))
            {!!"<script> Swal.fire(
                'Correcto!',
                'Tu recuerdo se ha eliminado!',
                'success'
              )</script>"!!}
        @endif
        
        <div class="text-center mt-4 mb-4">
        <h1>Recuerdos</h1>
        </div>

        @foreach ($consultaRec as $consulta)

            <div class="container col-md-6 mt-4 mb-4">
                
                <div class="card text-center">
                    
                    <div class="card-header">
                    <h5 class="text-primary text-center">{{ $consulta->fecha }}</h5>
                    </div>
                    
                    <div class="card-body">
                    <h5 class="card-title">{{ $consulta->titulo }}</h5>
                    <p class="card-text">{{ $consulta->recuerdo }}</p>
                    </div>
                    
                    <div class="card-footer text-muted">
                        <a href="{{route('recuerdo.edit', $consulta->idRecuerdo)}}" class="btn btn-warning">Editar</a>
                        <a href="{{route('recuerdo.show', $consulta->idRecuerdo)}}" class="btn btn-danger">Eliminar</a>
                    </div>
                
                </div>

            </div>

        @endforeach 

    @stop
    


    
