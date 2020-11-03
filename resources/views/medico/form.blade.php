<div class="container">
    <div class="form-group">

        <label for="nombre">NOMBRES</label>
        <input type="text" class="form-control {{$errors->has('nombre')?'is-invalid':'' }} " name="nombre" id="nombre"
        value="{{ isset ($personas->nombre)?$personas->nombre:old('nombre') }}">
        {!! $errors->first('nombre','<div class="invalid-feedback">:message</div>') !!}
        <br/>
  

        
        <label for="apellido_paterno">APELLIDO PATERNO</label>
        <input type="text" class="form-control {{$errors->has('apellido_paterno')?'is-invalid':'' }}" name="apellido_paterno" id="apellido_paterno"
        value="{{ isset ($personas->apellido_paterno)?$personas->apellido_paterno:old('apellido_paterno')}}">
        {!! $errors->first('apellido_paterno','<div class="invalid-feedback">:message</div>') !!}
        <br/>
       


        <label for="apellido_materno">APELLIDO MATERNO</label>
        <input type="text" class="form-control {{$errors->has('apellido_materno')?'is-invalid':'' }}" name="apellido_materno" id="apellido_materno"
        value="{{ isset ($personas->apellido_materno)?$personas->apellido_materno:old('apellido_materno')}}">
        {!! $errors->first('apellido_materno','<div class="invalid-feedback">:message</div>') !!}
        <br/>
       

        <label for="ci">CEDULA DE IDENTIDAD</label>
        <input type="number" class="form-control {{$errors->has('ci')?'is-invalid':'' }}" name="ci" id="ci"
        value="{{ isset ($personas->ci)?$personas->ci:old('ci')}}">
        {!! $errors->first('ci','<div class="invalid-feedback">:message</div>') !!}
        <br/>

        
        <label for="fecha_nacimiento">FECHA DE NACIMIENTO</label>
        <input type="date" class="form-control {{$errors->has('fecha_nacimiento')?'is-invalid':'' }}" name="fecha_nacimiento" id="fecha_nacimiento"
        value="{{ isset ($personas->fecha_nacimiento)?$personas->fecha_nacimiento:old('fecha_nacimiento')}}">
        {!! $errors->first('fecha_nacimiento','<div class="invalid-feedback">:message</div>') !!}
        <br/>


        <label for="direccion">DIRECCION</label>
        <input type="text" class="form-control {{$errors->has('direccion')?'is-invalid':'' }} " name="direccion" id="direccion" placeholder="AVENIDA  |  CALLE  |  NUMERO DE CASA"
        value="{{ isset ($personas->direccion)?$personas->direccion:old('direccion') }}">
        {!! $errors->first('direccion','<div class="invalid-feedback">:message</div>') !!}
        <br/>
        

        <label for="celular">CELULAR</label>
        <input type="number" class="form-control {{$errors->has('celular')?'is-invalid':'' }}" name="celular" id="celular"
        value="{{ isset ($personas->celular)?$personas->celular:old('celular')}}">
        {!! $errors->first('celular','<div class="invalid-feedback">:message</div>') !!}
        <br/>


        <label for="telefono">TELEFONO</label>
        <input type="number" class="form-control {{$errors->has('telefono')?'is-invalid':'' }}" name="telefono" id="telefono"
        value="{{ isset ($personas->telefono)?$personas->telefono:old('telefono')}}">
        {!! $errors->first('telefono','<div class="invalid-feedback">:message</div>') !!}
        <br/>


        <label for="correo">CORREO</label>
        <input type="enail" class="form-control {{$errors->has('correo')?'is-invalid':'' }}" name="correo" id="correo"
        value="{{ isset ($personas->correo)?$personas->correo:old('correo')}}">
        {!! $errors->first('correo','<div class="invalid-feedback">:message</div>') !!}
        <br/>

        
        <label for="credencial">CREDENCIAL</label>
        <input type="text" class="form-control {{$errors->has('credencial')?'is-invalid':'' }}" name="credencial" id="credencial"
        value="{{ isset ($medicos->credencial)?$medicos->credencial:old('credencial')}}">
        {!! $errors->first('credencial','<div class="invalid-feedback">:message</div>') !!}
        <br/>


        <label for="profesion">PROFESION</label>
        <input type="text" class="form-control {{$errors->has('profesion')?'is-invalid':'' }}" name="profesion" id="apellido_paterno"
        value="{{ isset ($medicos->profesion)?$medicos->profesion:old('profesion')}}">
        {!! $errors->first('profesion','<div class="invalid-feedback">:message</div>') !!}
        <br/>
        

        <label for="especialidad">ESPECIALIDAD</label>
        <input type="text" class="form-control {{$errors->has('especialidad')?'is-invalid':'' }}" name="especialidad" id="especialidad"
        value="{{ isset ($medicos->especialidad)?$medicos->especialidad:old('especialidad')}}">
        {!! $errors->first('especialidad','<div class="invalid-feedback">:message</div>')!!}
        <br/>


        <label for="area">AREA</label>
        <input type="text" class="form-control {{$errors->has('area')?'is-invalid':'' }}" name="area" id="area"
        value="{{ isset ($medicos->area)?$medicos->area:old('area')}}">
        {!! $errors->first('area','<div class="invalid-feedback">:message</div>') !!}
        <br/>


        <label for="foto" class="control-label">FOTO</label>
        @if (isset($personas->foto))
        <br/>
            <img src="{{ asset('storage').'/'.$persona->foto }}" alt= "" width="200">
        <br/>                
        @endif
        
        <input type="file" class="form-control {{$errors->has('foto')?'is-invalid':'' }}" name="foto" id="foto" value="">
        {!! $errors->first('foto','<div class="invalid-feedback">:message</div>') !!}
        <br/>

        <input type="submit" class="btn btn-success "value="{{$Modo=='crear' ? 'Agregar ': 'Editar '}}">
        <a class="btn btn-primary" href="{{ url ('medico') }}">Cancelar</a>
    </div>
</div>