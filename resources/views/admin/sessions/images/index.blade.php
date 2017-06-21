@extends('admin.main');

@section('title','Lista de imagenes')

@section('content')
<br>
<br>
	<div class="row">
		@foreach($images as $image)
			<div class="col-md-4">
				<div class="panel panel-default">
				  <div class="panel-body">
				    <img src="/image/articles/{{ $image->name }}" class="img-responsive">
				    <hr>
				     <i class="fa fa-clock-o"></i>Ultima actualizacion {{ $image->updated_at->diffForHumans()}}
				    <div class="pull-right">
				      <i class="fa fa-clock-o"></i>Creado  {{ $image->created_at->diffForHumans() }}
				    </div>
				  </div>
				  <div class="panel-footer">{{ $image->article->title }}</div>
				</div>
			</div>
		@endforeach
	</div>

@endsection