@extends('admin.main')
  @section('content')
  <br>
  <br>

  	<div class="container">
    {!! Form::open(['route'=>['panel-de-administrador.users.update',$user], 'method'=>'PUT'])!!}

        <div class="jumbotron formularios"> 
         <div class="form-group">
           {!! Form::label('email','Email') !!}
           
           {!! Form::email('email',$user->email,['class'=>'form-control','placeholder'=>'email','required'])!!}
         </div>

         <div class="form-group">
           {!! Form::label('role','Role') !!}
            
           {!! Form::select('role',['admin'=> 'Administrador','trainer'=>'Instructor','client'=>'Cliente'], $user->role, ['class'=>'form-control'])!!}
         </div>
         <div class="form-group">
          {!! Form::submit('Editar',['class'=>'btn btn-warning'])!!}
        </div>
        </div>
    {!! Form::close()!!}
  	  
  	</form>
  	</div>
  @endsection