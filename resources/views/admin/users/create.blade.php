@extends('admin.main')
  @section('content')

  	<div class="container">
    {!! Form::open(['route'=>'panel-de-administrador.users.store', 'method'=>'POST'])!!}
        <fieldset>
        <legend><h2>Adicional nuevo Usuario...</h2></legend>

        <div class="input-group margin-bottom-sm">
          <span for="inputName" class="input-group-addon"><i class="fa fa-user fa-fw" aria-hidden="true"></i></span>
          {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Name/1er name y apell','required'])!!}
        </div>
        <div class="input-group margin-bottom-sm">
           <span for="inputEmail" class="input-group-addon"><i class="fa fa-envelope-o fa-fw" aria-hidden="true"></i></span>
          {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Email','required'])!!}
        </div>
        <div class="input-group margin-bottom-sm">
           <span for="inputPassword" class="input-group-addon"><i class="fa fa-key fa-fw" aria-hidden="true"></i></span>
          {!! Form::password('password',['class'=>'form-control','placeholder'=>'password','required'])!!}
        </div>
        <legend><h4>Recuerda este usuario teandra acceso renstringido a "Usuarios"</h4> </legend>
        <div class="input-group">
           {!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
        </div>
        </fieldset>
    {!! Form::close()!!}
  	  
  	</form>
  	</div>
  @endsection