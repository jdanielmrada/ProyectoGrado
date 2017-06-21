@extends('admin.main');

@section('title','Editar articulo')

@section('content')
<br>
<br>
	<div class="container">
		<div class="jumbotron formularios">
			<h4>Editando el Articulo {{ $article->title }}</h4>
				{!! Form::open(['route'=>['panel-de-administrador.articles.update',$article],'method'=>'PUT', 'files'=>true]) !!}
					<div class="form-group">
						{!! Form::label('title','Titulo') !!}
						{!! Form::text('title',$article->title,['class'=>'form-control','placeholder'=>'Titulo del articulo ','required']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('category_id','Categoria') !!}
						{!! Form::select('category_id', $categories, $article->category->id,['class'=>'form-control select-category','required'] ) !!}
					</div>
					<div class="form-group">
						{!! Form::label('content','Contenido') !!}
						{!! Form::textarea('content', $article->content, ['class'=>'form-control textarea-contet']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('content','Contenido') !!}
						{!! Form::date('fechaProyecto', $article->fechaProyecto,['class'=>'form-control','placeholder'=>'Fecha del proyecto ','required']) !!}
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