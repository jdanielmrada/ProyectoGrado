@extends('admin.main')
  @section('content')
  
  	<div class="container">
    {!! Form::open(['route'=>['panel-de-administrador.users.update',$user], 'method'=>'PUT'])!!}
        <fieldset>
        <legend><h2>Editando datos de {{ $user->name }}</h2></legend>

        <div class="input-group margin-bottom-sm">
          <span for="inputName" class="input-group-addon"><i class="fa fa-user fa-fw" aria-hidden="true"></i></span>
          {!! Form::text('name',$user->name,['class'=>'form-control','placeholder'=>'Name/1er name y apell','required'])!!}
        </div>
        <div class="input-group margin-bottom-sm">
           <span for="inputEmail" class="input-group-addon"><i class="fa fa-envelope-o fa-fw" aria-hidden="true"></i></span>
          {!! Form::email('email',$user->email,['class'=>'form-control','placeholder'=>'Email','required'])!!}
        </div>
        <div class="input-group margin-bottom-sm">
           <span for="inputEmail" class="input-group-addon"><i class="fa fa-envelope-o fa-fw" aria-hidden="true"></i></span>
          {!! Form::select('role',['Encargado'=> 'Encargado', 'Administrador'=> 'Administrador'], null, ['class'=>'form-control'])!!}
        </div>
        <legend><h4>Editando datos ...</h4> </legend>
        <div class="input-group">
           {!! Form::submit('Editar',['class'=>'btn btn-primary'])!!}
        </div>
        </fieldset>
    {!! Form::close()!!}
  	  
  	</form>
  	</div>
  @endsection