@extends('layouts.app')

@section('content')

<h3 class="text-center">FORMULARIO DE DATOS DEL MEDICO</h3>

<form action="{{ url('/medico')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}

    @include('medico.form',['Modo'=>'crear'])
</form>

@endsection