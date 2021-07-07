@extends('admin.main');

@section('title','Crear usuario')

@section('content')
<br>
<br>
	<div class="container">
		<div class="jumbotron formularios">
			<h4>Editando categoria</h4>
				{!! Form::open(['route'=>['panel-de-administrador.categories.update',$category],'method'=>'PUT']) !!}
					<div class="form-group">
						{!! Form::label('name','Categoria') !!}
						{!! Form::text('name',$category->name,['class'=>'form-control','placeholder'=>'Nombre de categoria','required']) !!}
					</div>
					<div class="input-group">
					  {!! Form::submit('Editar Categoria '.$category->name,['class'=>'btn btn-info'])!!}
					</div>


				{!! Form::close() !!} 
		</div>
	</div>

@endsection