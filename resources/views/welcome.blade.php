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
      				<img src="{{ asset('css/img/principal_neati.png') }}" class="img-responsive">
      				<div class="carousel-caption hidden-xs hidden-sm ">
      					<h3>neati</h3>
      					<p>Entrenar es salud</p>
      				</div>
      			</div>

      			<div class="item">
      				<img src="{{ asset('css/img/item2.jpg.png') }}" class="img-responsive">
      				<div class="carousel-caption hidden-xs hidden-sm">
      					<h3>El slider numero 2</h3>
      					<p>Puedes conoser mas de nosotros</p>
      				</div>
      			</div>

      			<div class="item">
      				<img src="{{ asset('css/img/item3.jpg') }}" class="img-responsive">
      				<div class="carousel-caption hidden-xs hidden-sm">
      					<h3>El slider numero 3</h3>
      					<p>Puedes conoser mas de nosotros</p>
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
    <div class="row hidden-xs hidden-sm">
    	<div class="col-md-4">
    		<p class="list-inline text-center lead">Vision</p>
    		<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim aliquid itaque, modi, perspiciatis laboriosam ad eius expedita error officia inventore minus veniam cupiditate soluta non quasi hic doloremque natus sequi.</p>
    	</div>
    	<div class="col-md-4">
    		<p class="list-inline text-center lead">Misión</p>
    		<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas dolor quam, quas id soluta nisi, iusto, sunt magni neque exercitationem qui facere ut. Rem voluptas dolores praesentium repellendus commodi, ullam.</p>
    	</div>
    	<div class="col-md-4">
    		<p class="list-inline text-center lead">Valores</p>
    		<p class="text-justify"><b>Honestidad:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam fuga quis a consequatur aliquid explicabo corporis ratione repudiandae, natus velit, quae rerum reiciendis. Cupiditate asperiores minus expedita, tempora, ipsum praesentium.</p>

    		<p class="text-justify"><b>Calidad:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit sequi accusamus, reiciendis, modi, explicabo minus quibusdam quisquam autem dignissimos asperiores debitis enim voluptate architecto incidunt illum illo vitae amet minima.</p>

    		<p class="text-justify"><b>Trabajo:</b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero ipsa ea sequi dicta repudiandae in dolor id placeat, possimus cumque magnam fugiat labore perferendis, doloribus repellat, assumenda culpa facere quos.</p>

    		<p class="text-justify"><b>Responsabilidad:</b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque alias praesentium fugiat odit eveniet architecto numquam minus facilis, dicta repellat, dolore vel quo fugit amet tempore perspiciatis corporis sunt quos.</p>

    		<p class="text-justify"><b>Confianza:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, in voluptatum minima tempora dolorem iure consequatur obcaecati facilis, repellat hic voluptate porro fugit sed. Consequatur minima iusto laborum laudantium odit.</p>

    		<p class="text-justify"><b>Seguridad:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit. At ea saepe modi inventore dignissimos eaque, ut aperiam laudantium impedit earum autem libero, vel ratione, provident voluptate recusandae similique repellat reprehenderit.</p>
    	</div>
    </div>
  	<div class="row hidden-md hidden-lg">
  		<!--Acordion-->
  		<div class="col-xs-12 panel-group" id="accordion" role="tablist">

  			<div class="panel panel-default">
  				<div class="panel-heading" role="tab" id="heading3">
  					<h4 class="panel-title">
  						<a href="#collapse1" data-toggle="collapse" data-parent="#accordion">
  							Vision
  						</a>
  					</h4>
  				</div>
  				<div id="collapse1" class="panel-collapse collapse in">
  					<div class="panel-body">
  						<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore exercitationem eius placeat adipisci harum, explicabo quisquam facere necessitatibus, dignissimos nisi esse sunt impedit ad eveniet quaerat cum unde dolorum porro.</p>
  					</div>
  				</div>
  			</div>

  			<div class="panel panel-default">
  				<div class="panel-heading" role="tab" id="heading2">
  					<h4 class="panel-title">
  						<a href="#collapse2" data-toggle="collapse" data-parent="#accordion">
  							Misión
  						</a>
  					</h4>
  				</div>
  				<div id="collapse2" class="panel-collapse collapse">
  					<div class="panel-body">
  						<p class="text-justify"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni quos fuga quidem saepe sunt ullam rem deleniti possimus optio voluptatibus laborum dolores molestiae maiores, necessitatibus, sint impedit accusamus laudantium libero.</p>
  					</div>
  				</div>
  			</div>

  			<div class="panel panel-default">
  				<div class="panel-heading" role="tab" id="heading3">
  					<h4 class="panel-title">
  						<a href="#collapse3" data-toggle="collapse" data-parent="#accordion">
  							Valores
  						</a>
  					</h4>
  				</div>
  				<div id="collapse3" class="panel-collapse collapse">
  					<div class="panel-body">
  						<p class="text-justify"><b>Honestidad:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae eius a magni, voluptas ab, doloremque nisi accusamus inventore quis provident id consequatur amet nemo labore nesciunt et reprehenderit blanditiis hic.</p>

  						<p class="text-justify"><b>Calidad:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores doloribus dicta voluptatum fugiat iusto impedit sint maiores atque fuga necessitatibus, dolore alias magnam vel odio porro optio recusandae sunt quis.</p>

  						<p class="text-justify"><b>Trabajo:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam quo accusamus ad quibusdam, eius molestias suscipit excepturi adipisci commodi asperiores veniam praesentium error laboriosam. Magnam ipsam repudiandae debitis. Commodi, velit.</p>

  						<p class="text-justify"><b>Responsabilidad:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum at ducimus id earum obcaecati, qui veritatis cupiditate facere quaerat error ea dolore, maxime aliquid beatae minima ratione dolores ipsam voluptatibus!</p>

  						<p class="text-justify"><b>Confianza:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit ullam quibusdam recusandae, explicabo harum voluptate eligendi, in itaque fugit corporis nemo omnis incidunt nisi quae obcaecati perferendis. Illum et, quas!</p>

  						<p class="text-justify"><b>Seguridad:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, dolores, accusantium. Rerum itaque inventore quas unde ea? Voluptatem ullam, odit impedit, debitis autem nobis repudiandae aliquid, error nam eius totam.</p>
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
