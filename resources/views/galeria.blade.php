@extends('main')

@section('title','Galeria')

@section('content-banner')

<!--##########Panel de imagenes#################-->
<div class="row">
	<section class="post col-md-9">
		@foreach($articles as $article)
			<article class="post clearfix">
				
				<a href="{{ route('panel-de-administrador.front.detalle',$article->id) }}" class="thumb pull-left">
					<div class="slider">
						<ul>
							@foreach($article->images as $image)
								<li>
									<img class="img-responsive img-thumbnail" src="{{asset('image/articles/' . $image->name)}}">
								</li>
							@endforeach
						</ul>
					</div>                	                
	             </a>

	             <h2 class="post-title">
	             	<a href="#">{{ $article->title }}</a>
	             </h2>
	             <h5>
	             	{{$article->user->email}}
	             	<p><small>{{$article->user->dato->name}}</small></p>
	             </h5>
	             <p><span class="post-fecha">{{ $article->updated_at->diffForHumans() }}</span></p>
	             <p class="post-contenido text-justify">{{ $article->content }}</p>
	             <div class="contenedor-botones">
	             	<a href="{{ route('panel-de-administrador.front.detalle',$article->id) }}" class="btn btn-primary">Visualizar</a>

	             	@if((Auth::user()->email == $article->user->email) || (Auth::user()->admin() ))
	             	<a href="{{ route('panel-de-administrador.clientTrainers.edit',$article->id) }}" class="btn btn-warning">Editar</a>
	             	<a href="{{ route('panel-de-administrador.clientTrainers.destroy',$article->id) }}" class="btn btn-danger">Eliminar</a>
	             	@endif

	             </div>
					
			</article>
		@endforeach
		{!! $articles->render() !!}

	</section>

	<aside class="col-md-3 hidden-xs hidden-sm">
		 @include('publics.aside')
	</aside>

</div>

@endsection
@section('js')
	<script src="{{ asset('plugines/clean-slider/clean-slider.js') }}"></script>
@endsection