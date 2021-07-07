@extends('admin.main')
  @section('content')
  
  	<div class="container">
    {!! Form::open(['route'=>['panel-de-administrador.editinfors.update',$dato], 'method'=>'PUT'])!!}
      <div class="jumbotron formularios"> 

        <div class="form-group">
          {!! Form::label('nombre','Nombre y Apellido') !!}
          
          {!! Form::text('name',$dato->name,['class'=>'form-control','placeholder'=>'Nombres','required'])!!}
        </div>


        <div class="form-group">
          {!! Form::label('cedula','Cedula') !!}
           
          {!! Form::number('cedula',$dato->cedula,['class'=>'form-control','placeholder'=>'Cedula','required'])!!}
        </div>

        <div class="form-group">
          {!! Form::label('sexo','Sexo') !!}
           
          {!! Form::select('sexo',['Hombre'=> 'Hombre', 'Mujer'=> 'Mujer'], $dato->sexo, ['class'=>'form-control'])!!}
        </div>
        
        <div class="form-group">
        {!! Form::label('telefono','Telefono') !!}
          
          {!! Form::text('telefono',$dato->telefono,['class'=>'form-control','placeholder'=>'Telefono /casa/movil','required'])!!}
        </div>
        
        <div class="form-group">
          {!! Form::label('direction','Dirección') !!}
          {!! Form::text('direction',$dato->direction,['class'=>'form-control','placeholder'=>'Dirección','required'])!!}
        </div>

        <div class="form-group">
          {!! Form::submit('Editar',['class'=>'btn btn-warning'])!!}
        </div>
      </div>
    {!! Form::close()!!}
  	  
  	</form>
  	</div>
  @endsection