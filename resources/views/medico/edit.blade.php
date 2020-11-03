@extends('layouts.app')

@section('content')
	<form action = "{{url('/medico/' . $personas->id)}}" method = "post" enctype="multipart/form-data">
		{{ csrf_field() }}
		{{ method_field('PATCH') }}
			@include('medico.form',['Modo'=>'editar'])
	</form>
@endsection