@extends('main')

@section('title','Inicio')
@section('content-banner')
<div class="container">
	<div class="row">
		<div class="col-md-2">
			
		</div>
		<div class="col-md-6">
			
				<form class="form-horizontal" method="GET" action="{{route('panel-de-administrador.block.update', $block->id)}}">
			      <fieldset>
			        <legend><h2>Editando publicación</h2></legend>

			        <div class="input-group margin-bottom-sm">
			          <span for="inputAsunto" class="input-group-addon"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i></span>
			          <input class="form-control" id="inputAsunto" name='asunto' value='{{ $block->asunto }}' type="text" placeholder="Asunto">
			        </div>
			        <input class="form-control" name="description" value="{{ $block->description }}" type="hidden">
			      <!--  <input class="form-control" name="_token" value="" type="hidden"> -->
			       <input class="form-control" name="_token" value="{{csrf_token()}}" type="hidden">
			       <input class="form-control" name="user_id" value="{{ Auth::user()->id }}" type="hidden">
			        <legend><h4>Tu publicación sera publica entre todo los usuarios del sistema"</h4> </legend>
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
@endsection