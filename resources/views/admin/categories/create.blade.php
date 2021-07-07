@extends('admin.main');

@section('title','Crear usuario')

@section('content')
<br>
<br>
	<div class="container">
		<div class="jumbotron formularios">
			<h4>Añadiendo una nueva categoria</h4>
				{!! Form::open(['route'=>'panel-de-administrador.categories.store','method'=>'POST']) !!}
					<div class="form-group">
						{!! Form::label('name','Categoria') !!}
						{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre de categoria','required']) !!}
					</div>
					<div class="input-group">
					  {!! Form::submit('Añadir Categoria',['class'=>'btn btn-info'])!!}
					</div>


				{!! Form::close() !!} 
		</div>
	</div>

@endsection