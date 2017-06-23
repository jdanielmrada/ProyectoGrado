@extends('admin.main')
  @section('content')
  
  	<div class="container">
    {!! Form::open(['route'=>['panel-de-administrador.clientes.update',$cliente], 'method'=>'PUT','class'=>''])!!}
       <div class="jumbotron formularios">

        <div class="form-group">
          {!! Form::label('antecedente_medico','Antecedente') !!}
          
          {!! Form::text('antecedente_medico',$cliente->antecedente_medico,['class'=>'form-control','placeholder'=>'Antecedentes medicos','required'])!!}
        </div>

        <div class="form-group">
          {!! Form::label('nombre','Nombre y Apellido') !!}
          
          {!! Form::text('name',$cliente->user->dato->name,['class'=>'form-control','placeholder'=>'Nombres','required'])!!}
        </div>


        <div class="form-group">
          {!! Form::label('cedula','Cedula') !!}
           
          {!! Form::number('cedula',$cliente->user->dato->cedula,['class'=>'form-control','placeholder'=>'Cedula','required'])!!}
        </div>

        <div class="form-group">
          {!! Form::label('sexo','Sexo') !!}
           
          {!! Form::select('sexo',['Hombre'=> 'Hombre', 'Mujer'=> 'Mujer'], null, ['class'=>'form-control'])!!}
        </div>
        
        <div class="form-group">
        {!! Form::label('telefono','Telefono') !!}
          
          {!! Form::number('telefono',$cliente->user->dato->telefono,['class'=>'form-control','placeholder'=>'Telefono /casa/movil','required'])!!}
        </div>
        
        <div class="form-group">
          {!! Form::label('direction','Dirección') !!}
          {!! Form::text('direction',$cliente->user->dato->direction,['class'=>'form-control','placeholder'=>'Dirección','required'])!!}
        </div>
        
         <div class="form-group">
          {!! Form::hidden('dato_id', $cliente->user->dato->id,['class'=>'form-control','required'])!!}
        </div>

         <div class="form-group">
          {!! Form::hidden('user_id',$cliente->user->dato->id,['class'=>'form-control','required'])!!}
        </div>

        <div class="input-group">
          {!! Form::submit('Editar',['class'=>'btn btn-primary'])!!}
        </div>
    {!! Form::close()!!}
  	  
  	</div>
  @endsection