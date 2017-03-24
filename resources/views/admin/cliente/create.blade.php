@extends('admin.main')
  @section('content')

  	<div class="container">
    {!! Form::open(['route'=>'panel-de-administrador.fonts.store', 'method'=>'POST','id'=>'SignupForm'])!!}

        <fieldset id="fieldset">
          <legend><h2>Datos de rutina</h2></legend>

        <div class="input-group margin-bottom-sm">
          <span for="inputNombre" class="input-group-addon"><i class="fa fa-user fa-fw" aria-hidden="true"></i></span>
          {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombres','required'])!!}
        </div>
        <div class="input-group margin-bottom-sm">
          <span for="inputApellido" class="input-group-addon"><i class="fa fa-user fa-fw" aria-hidden="true"></i></span>
          {!! Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Apellidos','required'])!!}
        </div>
        <div class="input-group margin-bottom-sm">
           <span for="inputCedula" class="input-group-addon"><i class="fa fa-envelope-o fa-fw" aria-hidden="true"></i></span>
          {!! Form::number('cedula',null,['class'=>'form-control','placeholder'=>'Cedula','required'])!!}
        </div>
        <div class="input-group margin-bottom-sm">
           <span for="inputSexo" class="input-group-addon"><i class="fa fa-envelope-o fa-fw" aria-hidden="true"></i></span>
          {!! Form::select('sexo',['Hombre'=> 'Hombre', 'Mujer'=> 'Mujer'], null, ['class'=>'form-control'])!!}
        </div>
        <br>
        </fieldset>
        <fieldset id="fieldset">
          <legend><h2>Datos para entrenar</h2></legend>
            <div class="input-group margin-bottom-sm">
              <span for="inputAntecedente" class="input-group-addon"><i class="fa fa-user fa-fw" aria-hidden="true"></i></span>
              {!! Form::text('antecedente',null,['class'=>'form-control','placeholder'=>'Antecedente medico','required'])!!}
            </div>
            <div class="input-group margin-bottom-sm">
              <span for="inputTelefono" class="input-group-addon"><i class="fa fa-user fa-fw" aria-hidden="true"></i></span>
              {!! Form::text('telefono',null,['class'=>'form-control','placeholder'=>'Telefono /casa/movil','required'])!!}
            </div>
            <div class="input-group margin-bottom-sm">
              <span for="inputDirection" class="input-group-addon"><i class="fa fa-user fa-fw" aria-hidden="true"></i></span>
              {!! Form::text('direction',null,['class'=>'form-control','placeholder'=>'Dirección','required'])!!}
            </div>
            {!! Form::hidden('user_id', Auth::user()->id,['class'=>'form-control','placeholder'=>'Dirección','required'])!!}
        <br>
        </fieldset>
        <fieldset id="fieldset">
          <legend><h2>Datos de pagos</h2></legend>
            <div class="input-group margin-bottom-sm">
              <span for="inputPago" class="input-group-addon"><i class="fa fa-user fa-fw" aria-hidden="true"></i></span>
              {!! Form::text('pago',null,['class'=>'form-control','placeholder'=>'inscripción','required'])!!}
            </div>
          
        <br>
        </fieldset>
        <br>
        <div class="input-group">
          {!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
        </div>
    {!! Form::close()!!}
  	  
  	</form>
  	</div>
  @endsection