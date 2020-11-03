@extends('layout')

@section('title', 'CONTACTO')

@section('content')
<br><br><br>
<div class="container">
    <form class="bg-white shadow rounded py-3 px-4" 
        method="POST"
        action=" {{route('contacto')}}"
    >
        @csrf

        <center><h1 class="display-5">CONTACTO</h1></center>

        <div class="form-group">
            <label for="name"> <strong>Nombre Completo</strong> </label>
            <input class="form-control bg-light shadow-sm
             @error('name') is-invalid 
                @else border-0 
             @enderror"
                id="name" 
                name="name"
                placeholder="Nombre completo"
                value="{{ old('name') }}"
            >
            @error ('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
            </span>                
            @enderror
        </div>

        <div class="form-group">
            <label for="email"> <strong>Correo electrónico</strong> </label>
            <input class="form-control bg-light shadow-sm
             @error('email') is-invalid 
                @else border-0 
             @enderror"
                id="email" 
                name="email"
                placeholder="Correo electrónico"
                value="{{ old('email') }}"
            >
            @error ('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
            </span>                
            @enderror
        </div>

        <div class="form-group">
            <label for="subject"> <strong>Asunto</strong> </label>
            <input class="form-control bg-light shadow-sm
             @error('subject') is-invalid 
                @else border-0 
             @enderror"
                id="subject" 
                name="subject"
                placeholder="Asunto"
                value="{{ old('subject') }}"
            >
            @error ('subject')
            <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
            </span>                
            @enderror
        </div>

        <div class="form-group">
            <label for="content"> <strong>Contenido</strong> </label>
            <textarea class="form-control bg-light shadow-sm
             @error('content') is-invalid 
                @else border-0 
             @enderror"
                id="content" 
                name="content"
                placeholder="Escribe aquí el con tenido de tu mensaje...">{{ old('content') }}</textarea>
            @error ('content')
            <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
            </span>                
            @enderror
        </div>

        <button class="btn btn-primary btn-lg btn-block">Enviar</button>
       
    </form>
</div>
       
@endsection