@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>MEDICOS</h1>
                @if (Session::has('Mensaje'))

                    <div class="alert alert-success" role="alert">
                        {{ Session::get('Mensaje') }}
                    </div>

                @endif

            </div class="container">
            
            <nav class="navbar navbar-light bg-light">
                <div class="col text-right">
                    <a href="{{ url('medico/create') }}" class="btn btn-success">AGREGAR MEDICO</a>
                </div>
                <form class="form-inline">
                  <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" >
                  <button class="btn btn-primary my-2 my-sm-0" type="submit">Buscar</button>
                </form>
              </nav>
        </div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="container">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover ">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>FOTO</th>
                                    <th>NOMBRES</th>
                                    <th>APELLIDO PATERNO</th>
                                    <th>APELLIDO MATERNO</th>
                                    <th>CEDULA DE IDENTIDAD</th>
                                    <th>FECHA DE NACIMINETO</th>
                                    <th>EDAD</th>
                                    <th>DIRECCION</th>
                                    <th>CELULAR</th>
                                    <th>TELEFONO</th>
                                    <th>CORREO</th>
                                    <th>CREDENCIAL</th>
                                    <th>PROFESION</th>
                                    <th>ESPECIALIDAD</th>
                                    <th>AREA</th>
                                    <th>ACCIONES</th>
                                </tr>
                            </thead>
  
                            <tbody>
                                @foreach ($persona as $personas)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <td> 
                                        <img src="{{ asset('storage').'/'.$personas->foto }}" alt="" width="200" > 
                                        </td>
                                        <td>{{ $personas->nombre }}</td>
                                        <td> {{ $personas->apellido_paterno }}</td>
                                        <td>{{ $personas->apellido_materno }}</td>
                                        <td>{{ $personas->ci }}</td>
                                        <td>{{ $personas->fecha_nacimiento }}</td>
                                        <td>{{ $edad = \Carbon\Carbon::parse($personas->fecha_nacimiento)->age }}</td>
                                        <td>{{ $personas->direccion }}</td>
                                        <td>{{ $personas->celular }}</td>
                                        <td>{{ $personas->telefono }}</td>
                                        <td>{{ $personas->correo }}</td>
                                        <td>{{ $personas->medico->credencial }}</td>
                                        <td>{{ $personas->medico->profesion }}</td>
                                        <td>{{ $personas->medico->especialidad }}</td>
                                        <td>{{ $personas->medico->area }}</td>
                                        <td>
                                            <div class="btn-group btn-group-horizontal" role="group">

                                                <a class="btn btn-info"
                                                    href="{{ route('medico.show', $personas->id) }}">Ver </a>
                                                <a class="btn btn-warning"
                                                    href="{{ url('/medico/' .$personas->id.'/edit') }}">Editar </a>
                                                <form method="post" action="{{ url('/medico/'.$personas->personas_id ) }}" style="display:inline">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');">Eliminar</button>

                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                    </div>
                    {{ $persona->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
