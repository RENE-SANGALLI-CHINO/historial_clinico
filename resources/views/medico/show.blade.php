@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <div class="card">
                <div class="card-header">
                  <center><h4><strong> INFORMACIÓN DEL DOCTOR</strong></h4></center>
                </div>
                <div class="card-body">
                  <h5 class="card-title"> <strong> Nombre: </strong>{{ $personas->nombre }}</h5>
                  <h5 class="card-title"> <strong>Apellido Paterno: </strong>{{ $personas->apellido_paterno }}</h5>
                  <h5 class="card-title"> <strong>Apellido Materno: </strong>{{ $personas->apellido_materno }}</h5>
                  <h5 class="card-title"> <strong>Cedula de Identidad: </strong>{{ $personas->ci }}</h5>
                  <h5 class="card-title"> <strong>Fecha de nacimiento: </strong>{{ $personas->fecha_nacimiento }}</h5>
                  <h5 class="card-title"> <strong>Edad: </strong>{{ $edad = \Carbon\Carbon::parse($personas->fecha_nacimiento)->age }} Años</h5>
                  <h5 class="card-title"> <strong>Direccion: </strong>{{ $personas->direccion }}</h5>
                  <h5 class="card-title"> <strong>Celular: </strong>{{ $personas->celular }}</h5>
                  <h5 class="card-title"> <strong>Telefono: </strong>{{ $personas->telefono }}</h5>
                  <h5 class="card-title"> <strong>Correo: </strong>{{ $personas->correo }}</h5>
                  <h5 class="card-title"> <strong>Credencial: </strong>{{ $personas->credencial }}</h5>
                  <h5 class="card-title"> <strong>Profesion: </strong>{{ $personas->profesion }}</h5>
                  <h5 class="card-title"> <strong>Especialidad: </strong>{{ $personas->especialidad }}</h5>
                  <h5 class="card-title"> <strong>Area: </strong>{{ $personas->area }}</h5>
                  
                  <a href="{{ url ('medico') }}"class="btn btn-primary">Regresar</a>
                </div>
              </div>
        </div>
        <div class="col"></div>
    </div>
</div>    
@endsection