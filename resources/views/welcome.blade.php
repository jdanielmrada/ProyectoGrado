@extends('main')

@section('title','Inicio')

@section('content-banner')
  <div class="banner">
      <div class="col-md-12">
      	<div id="carousel-1" class="carousel slide" data-ride="carousel">
      		<!--Indicadores-->
      		<ol class="carousel-indicators">
      			<li data-target="#carousel-1" data-slide-to="0" class="active"></li>
      			<li data-target="#carousel-1" data-slide-to="1"></li>
      			<li data-target="#carousel-1" data-slide-to="2"></li>
      		</ol>
      		<!--Contenedor de los slider-->
      		<div class="carousel-inner" role="listbox">
      			<div class="item active">
      				<img src="{{ asset('css/img/item1.jpg') }}" class="img-responsive">
      				<div class="carousel-caption hidden-xs hidden-sm ">
      					<h3>Pesos apropiados</h3>
      					<p>Cada cliente entrena con un peso apropiado</p>
      				</div>
      			</div>

      			<div class="item">
      				<img src="{{ asset('css/img/item2.jpg') }}" class="img-responsive">
      				<div class="carousel-caption hidden-xs hidden-sm">
      					<h3>Cuerpos fitnes</h3>
      					<p>La tonificación es muy importante</p>
      				</div>
      			</div>

      			<div class="item">
      				<img src="{{ asset('css/img/item3.jpg') }}" class="img-responsive">
      				<div class="carousel-caption hidden-xs hidden-sm">
      					<h3>Entrenamiento Funcional</h3>
      					<p>Entrenar de manera libre tambien da resultados</p>
      				</div>
      			</div>
      		</div>
      		<!--Controles-->
      		<a href="#carousel-1" class="left carousel-control" role="button" data-slide="prev">
      			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      			<span class="sr-only">Anterior</span>
      		</a>
      		<a href="#carousel-1" class="right carousel-control" role="button" data-slide="next">
      			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      			<span class="sr-only">Siguiente</span>
      		</a>
      	</div>
      </div>
  </div>

  <div class="body">
    <div id="bloqueTexto">
      <div class="container-fruid">
        <div class="row hidden-xs hidden-sm">
          <div class="col-sm-12 col-md-12 imagenMuestra">
            <div class="texto">
              <div class="col-md-4">
                <p class="list-inline text-center lead">Funcional</p>
                <p class="text-justify">El entrenamiento funcional se trata de utilizar tu propio cuerpo como soporte y base para tu entrenamiento</p>
                <p class="list-inline text-center lead"><a class="btn btn-lg" href="">Mas información</a></p>
              </div>
              <div class="col-md-4">
                <p class="list-inline text-center lead textoNeati">neati</p>
              </div>
              <div class="col-md-4">
                <p class="list-inline text-center lead">Volumen</p>
                <p class="text-justify">Entrenar con pesos pesados y pocas repeticiones hacen que tus musculos cresacan</p>
                <p class="list-inline text-center lead"><a class="btn btn-lg" href="">Mas información</a></p>
              </div>
              </div>
            </div>           
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="footer">


  </div>
@endsection
@section('content-body')

@endsection
@section('content-footer')

@endsection
