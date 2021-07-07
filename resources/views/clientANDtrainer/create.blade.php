@extends('clientANDtrainer.main')
  @section('content')
	<div class="container">
		<div class="jumbotron formularios">
			<h4>Añadiendo un nuevo Articulo</h4>
				{!! Form::open(['route'=>'panel-de-administrador.clientTrainers.store','method'=>'POST', 'files'=>true]) !!}
					<div class="form-group">
						{!! Form::label('image','Imagenes') !!}
						{!! Form::file('image[]',['class'=>'btn btn-info multi', 'accept'=>'jpg|gif|png|jpeg']) !!}

					</div>
					<div class="form-group">
						{!! Form::label('title','Titulo') !!}
						{!! Form::text('title',null,['class'=>'form-control','placeholder'=>'Titulo del articulo ','required']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('category_id','Categoria') !!}
						{!! Form::select('category_id', $categories, null,['class'=>'form-control select-category','required'] ) !!}
					</div>
					<div class="form-group">
						{!! Form::label('content','Contenido') !!}
						{!! Form::textarea('content', null, ['class'=>'form-control textarea-contet']) !!}
					</div>
					

					<div class="input-group">
					  {!! Form::submit('Agregar Articulo',['class'=>'btn btn-primary'])!!}
					</div>

				{!! Form::close() !!}
		</div>
	</div>

@endsection
@section('js')
	<script>
		$('.select-category').chosen();
		$('.textarea-contet').trumbowyg();
	</script>
@endsection
