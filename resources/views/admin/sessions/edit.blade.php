@extends('admin.main');

@section('title','Editar usuario')

@section('content')
<br>
<br>
	<div class="container">
		<div class="jumbotron formularios">
			<h4>Bienvenido Sr(a) {{ $session->email }}</h4>
			<h6>Esta a punto de cambiar su contraseña</h6>
				{!! Form::open(['route'=>['panel-de-administrador.sessions.update',$session],'method'=>'PUT']) !!}
					<div class="form-group">
						{!! Form::label('password','Nueva contraseña') !!}
						{!! Form::password('password',['class'=>'form-control','placeholder'=>'Introdusca su nueva contraseña','required']) !!}
					</div>
					<div class="input-group">
					  {!! Form::submit('Cambiar contraseña de '.$session->email,['class'=>'btn btn-info'])!!}
					</div>


				{!! Form::close() !!} 
		</div>
	</div>

@endsection