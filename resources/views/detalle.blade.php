@extends('main')

@section('title','Detalle')

@section('content-banner')

<!--##########Panel de imagenes#################-->
<div class="row">
	<section class="col-md-8">

	
				
				
					<div class="slider">
						<ul>
							@foreach($article->images as $image)
								<li>
									<img class="img img-responsive img-thumbnail" src="{{asset('image/articles/' . $image->name)}}">
								</li>
							@endforeach
						</ul>
					</div>
	                	                
	             
	             <h2 class="post-title">
	             	<a href="#">{{ $article->title }}</a>
	             </h2>
	             <p><span class="post-fecha">20 de octubre 2012</span></p>
	             <p class="post-contenido text-justify">{{ $article->content }}</p>
					

	</section>

	<aside class="col-md-4 hidden-xs hidden-sm">
		 @include('publics.aside')
	</aside>

</div>

@endsection
@section('js')
	<script src="{{ asset('plugines/clean-slider/clean-slider-detalle.js') }}"></script>
@endsection