@extends('main')

@section('title','Inicio')

@section('content-banner')
	@foreach ($blocks as $block)
	  	<div class="panel panel-info">
	      <div class="panel-heading">
	      	<h2>{{ $block->user->name }} 
	      	@if((Auth::user()->email == $block->user->email) || (Auth::user()->admin() ))
		      	<div style="float: right"> 
		      		<a class="btn btn-warning" href="{{ route('panel-de-administrador.block.edit', $block->id) }}" onclick="return confirm(' ¿Editar? Recuerda que solo podras editar el asunto')">
	  					<i class="fa fa-files-o fa-lg"></i> Editar</a>
	  				 <a class="btn btn-danger" href="{{route('panel-de-administrador.block.destroy', $block->id) }}" onclick="return confirm('Estas a punto de eliminar esta publicación ¿Eliminar?')">
	  					<i class="fa fa-trash-o fa-lg"></i> Delete</a>
				</div>
			 @endif
  			</h2>

	        <h3 class="panel-title">Asunto:{{ $block->asunto}} 
	        
	        <div style="float: right">{{ $block->created_at->diffForHumans() }}</div>
	        </h3>
	        
	        <p>{{$block->user->dato->name}}</p>
	      </div>
	      <div class="panel-body">
	        {{ $block->description }}
	      </div>
	    </div>
	 @endforeach
	 {!! $blocks->render() !!}
	 <section>
	 <div class="container">
	 	<div class="row">
	 		<div class="col-md-2">
	 			
	 		</div>
	 		<div class="col-md-6">
	 			<form class="form-horizontal" method="POST" action="{{route('panel-de-administrador.block.store')}}">
	 			  <fieldset>
	 			    <legend><h4>!Comenta !</h4></legend>

	 			    <div class="input-group margin-bottom-sm">
	 			      <span for="inputAsunto" class="input-group-addon"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i></span>
	 			      <input class="form-control" id="inputAsunto" name='asunto' type="text" placeholder="Asunto">
	 			    </div>
	 			    <div class="input-group margin-bottom-sm">
	 			      <span for="inputPubli" class="input-group-addon"><i class="fa fa-home fa-fw" aria-hidden="true"></i></span>
	 			      <textarea class="form-control" rows="3" id="inputPubli" name='description' placeholder="Publicación"></textarea>
	 			    </div>
	 			  <!--  <input class="form-control" name="_token" value="" type="hidden"> -->
	 			   <input class="form-control" name="_token" value="{{csrf_token()}}" type="hidden">
	 			   <input class="form-control" name="user_id" value="{{ Auth::user()->id }}" type="hidden">
	 			    <legend><h4>Tu comentario sera publica entre todo los usuarios del sistema"</h4> </legend>
	 			    <div class="input-group">
	 			      <button type="submit" class="btn btn-info"><i class="fa fa-chevron-circle-right fa-lg"></i> Publicar</button>
	 			    </div>
	 			    
	 			  </fieldset>
	 			</form>
	 		</div>
	 		<div class="col-md-2">
	 			
	 		</div>
	 	</div>
	 </div>
    
</section>
@endsection