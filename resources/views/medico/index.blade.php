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
                                @foreach ($personas as $persona)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <td>
                                            <img src="{{ asset('storage') . '/' . $persona->foto }}"
                                                class="img-thumbnail img-fluid " alt="" width="100">
                                        </td>
                                        <td>{{ $persona->nombre }}</td>
                                        <td> {{ $persona->apellido_paterno }}</td>
                                        <td>{{ $persona->apellido_materno }}</td>
                                        <td>{{ $persona->ci }}</td>
                                        <td>{{ $persona->fecha_nacimiento }}</td>
                                        <td>{{ $edad = \Carbon\Carbon::parse($persona->fecha_nacimiento)->age }}</td>
                                        <td>{{ $persona->direccion }}</td>
                                        <td>{{ $persona->celular }}</td>
                                        <td>{{ $persona->telefono }}</td>
                                        <td>{{ $persona->correo }}</td>
                                        <td>{{ $persona->credencial }}</td>
                                        <td>{{ $persona->profesion }}</td>
                                        <td>{{ $persona->especialidad }}</td>
                                        <td>{{ $persona->area }}</td>
                                        <td>
                                            <div class="btn-group btn-group-horizontal" role="group">

                                                <a class="btn btn-info"
                                                    href="{{ route('medico.show', $persona->id) }}">Ver </a>
                                                <a class="btn btn-warning"
                                                    href="{{ url('/medico/' . $persona->id . '/edit') }}">Editar </a>
                                                <form method="post"
                                                    action="{{ url('/medico/' . $persona->personas_id . $persona->id) }}"
                                                    style="display:inline">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button class="btn btn-danger" type="submit"
                                                        onclick="return confirm('¿Borrar?');">Eliminar </button>

                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $personas->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
