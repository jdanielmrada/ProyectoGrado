<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Default')Panel de Administración</title>   
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('font-awesome-4.6.3/css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Css/mainportada.css')}}">
</head>
<body>
	
	<section id="contenedor_general">
		<div class="container">
			<ul class="nav nav-tabs">
			 @if(Auth::user())
					<li role="presentation">
				    <a href="{{route('panel-de-administrador.clientes.index')}}"><h6>Tauro Gym Fitness C.A</h6></a>
				  </li>
				  <li role="presentation">
						<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModalInformacion">
						     Mas información
					   </button>
				  </li>
				  <div class="btn-group navbar-right">
				    <a class="btn btn-default" href="#"><i class="fa fa-user fa-fw"></i> {{Auth::user()->name }}</a>
				    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
				      <span class="fa fa-caret-down" title="Toggle dropdown menu"></span>
				    </a>
				    <ul class="dropdown-menu">
				      <li><a href="" onclick="return confirm('¿Deseas editar tu usuario?')"><i class="fa fa-pencil fa-fw"></i> Editar tus datos</a></li>
				      <li><a href="" onclick="return confirm('¿Estas seguro de editar tu Contraseña?')"><i class="fa fa-trash-o fa-fw"></i> ¿ Cambiar contraseña? </a></li>
				      <li><a href="#"><i class="fa fa-ban fa-fw"></i> Ban</a></li>
				      <li class="divider"></li>
				      <li><a href="{{ route('inicio.auth.logout') }}"><i class="fa fa-unlock"></i> Salir </a></li>
				    </ul>
				  </div>
			 @else 
				  <li role="presentation">
				    <a href="#"><h6>Tauro Gym Fitness C.A</h6></a>
				  </li>
				  <li role="presentation">
						<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModalInformacion">
						     Mas información
					   </button>
				  </li>
				  <li role="presentation" class='navbar-right'>
						<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">
						     Ingresar
					   </button>
				  </li>
			 @endif
			</ul>
		</div>
		
	</section>
	<section>
		<!-- Modal ingresar.-->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Ingresar al sistema</h4>
		      </div>
		      <div class="modal-body">
		       
		            {!! Form::open(['route'=>'inicio.auth.login', 'method'=>'POST'])!!}
		                <fieldset>
		                <legend><h2></h2></legend>
						
		                <div class="input-group margin-bottom-md div-s">
		                   <span for="inputEmail" class="input-group-addon"><i class="fa fa-envelope-o fa-fw" aria-hidden="true"></i></span>
		                  {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Email','required'])!!}
		                </div>
		                <div class="input-group margin-bottom-md div-s">
		                   <span for="inputPassword" class="input-group-addon"><i class="fa fa-key fa-fw" aria-hidden="true"></i></span>
		                  {!! Form::password('password',['class'=>'form-control','placeholder'=>'password','required'])!!}
		                </div>
		                <legend><h4>Si no estas registrado no podras ingresar al sistema"</h4> </legend>
		                <div class="input-group">
		                   {!! Form::submit('Ingresar',['class'=>'btn btn-primary'])!!}
		                </div>
		                </fieldset>
		            {!! Form::close()!!}
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger	" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>
		<!--Fin del proceso model-->
		<!-- Modal mas información.-->
		<div class="modal fade" id="myModalInformacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Mas Información</h4>
		      </div>
		      <div class="modal-body">
		       
		            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger	" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>
		<!--Fin del proceso model-->
	</section>
	 
	<section id="body">
		<section id="scrolldown">
			<p id="titulo">Scroll Down</p>
			<p id="menorque"><</p>
		</section>
		<section id="seccion">
			<div id="container" class="container">
				<div class="row">
					<div id="footerUno" class="col-xs-12 col-sm-8">
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
						    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
						    <div class="item active">
						      <img src="{{ asset('Css/img/tauro.jpg.png') }}" alt="...">
						      <div class="carousel-caption">
						        <h3>...</h3>
						            <p>...</p>
						      </div>
						    </div>
						    <div class="item">
						      <img src="{{ asset('Css/img/tauro.jpg.png') }}" alt="...">
						      <div class="carousel-caption">
						        <h3>...</h3>
						            <p>...</p>
						      </div>
						    </div>
							<div class="item">
							  <img src="{{ asset('Css/img/tauro.jpg.png') }}" alt="...">
							  <div class="carousel-caption">
							    <h3>...</h3>
							        <p>...</p>
							  </div>
							</div>
						    
						  </div>

						  <!-- Controls -->
						  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>
					</div>
					<div id="footerDos" class="col-xs-12 col-sm-4">
						 yyy
					</div>

				</div>
			</div>
		</section>
	</section>
	<script src="{{asset('bootstrap/js/jQuery.js')}}"></script>
	<script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
	<script src="{{asset('js/scriptportada.js')}}"></script>
	<script src="{{asset('js/janko/formToWizard.js')}}"></script>
	<script type="text/javascript">
	    $(document).ready(function(){
	        $("#SignupForm").formToWizard({ submitButton: 'SaveAccount' })
	    });
	</script>
	<script src="{{asset('js/clonjs/jquery.addfield.js')}}"></script>

</body>

</html>