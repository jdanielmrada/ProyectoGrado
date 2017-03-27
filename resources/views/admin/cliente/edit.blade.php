@extends('admin.main')
  @section('content')
  
  	<div class="container">
    {!! Form::open(['route'=>['panel-de-administrador.clientes.update',$cliente], 'method'=>'PUT','id'=>'SignupForm'])!!}

        <fieldset id="fieldset">
          <legend><h2>Datos de {{ $cliente->nombre }}</h2></legend>

            <div class="input-group margin-bottom-sm">
              <span for="inputNombre" class="input-group-addon"><i class="fa fa-user fa-fw" aria-hidden="true"></i></span>
              {!! Form::text('nombre',$cliente->nombre,['class'=>'form-control','placeholder'=>'Nombres','required'])!!}
            </div>
            <div class="input-group margin-bottom-sm">
              <span for="inputApellido" class="input-group-addon"><i class="fa fa-user fa-fw" aria-hidden="true"></i></span>
              {!! Form::text('apellido',$cliente->apellido,['class'=>'form-control','placeholder'=>'Apellidos','required'])!!}
            </div>
            <div class="input-group margin-bottom-sm">
               <span for="inputCedula" class="input-group-addon"><i class="fa fa-envelope-o fa-fw" aria-hidden="true"></i></span>
              {!! Form::number('cedula',$cliente->cedula,['class'=>'form-control','placeholder'=>'Cedula','required'])!!}
            </div>
            <div class="input-group margin-bottom-sm">
               <span for="inputSexo" class="input-group-addon"><i class="fa fa-envelope-o fa-fw" aria-hidden="true"></i></span>
              {!! Form::select('sexo',['Hombre'=> 'Hombre', 'Mujer'=> 'Mujer'], null, ['class'=>'form-control'])!!}
            </div>
            <br>
        </fieldset>
        <fieldset id="fieldset">
          <legend><h2>Datos para entrenar de {{ $cliente->nombre }}</h2></legend>
            <div class="input-group margin-bottom-sm">
              <span for="inputAntecedente" class="input-group-addon"><i class="fa fa-user fa-fw" aria-hidden="true"></i></span>
              {!! Form::text('antecedente',$cliente->antecedente,['class'=>'form-control','placeholder'=>'Antecedente medico','required'])!!}
            </div>
            <div class="input-group margin-bottom-sm">
              <span for="inputTelefono" class="input-group-addon"><i class="fa fa-user fa-fw" aria-hidden="true"></i></span>
              {!! Form::text('telefono',$cliente->telefono,['class'=>'form-control','placeholder'=>'Telefono /casa/movil','required'])!!}
            </div>
            <div class="input-group margin-bottom-sm">
              <span for="inputDirection" class="input-group-addon"><i class="fa fa-user fa-fw" aria-hidden="true"></i></span>
              {!! Form::text('direction',$cliente->direction,['class'=>'form-control','placeholder'=>'Dirección','required'])!!}
            </div>
        <br>
        </fieldset>
        <br>
        <div class="input-group">
          {!! Form::submit('Editar',['class'=>'btn btn-primary'])!!}
        </div>
    {!! Form::close()!!}
  	  
  	</div>
  @endsection