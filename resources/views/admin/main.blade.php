<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title','panel de administrador')</title>   
        <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{ asset('plugines/chosen/chosen.css') }}">
         <link rel="stylesheet" href="{{ asset('plugines/trumbowyg/ui/trumbowyg.css') }}">
        <link rel="stylesheet" type="text/css" href="{{asset('bootstrap-social/bootstrap-social.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('font-awesome-4.6.3/css/font-awesome.css')}}">
       <!-- <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet"> -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/sass/formulario.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
        
    </head>
    <body>
<!--##########MENU SUPERIOR##############-->
        <div class="container-fluid">
           <nav class="navbar navbar-default navbar-fixed-top">
              
               <div class="navbar-header">
                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                   <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                 </button>
                 <a class="navbar-brand" href="{{ route('welcome.index') }}">neati</a>
               </div>

               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                 <ul class="nav navbar-nav">
                  @if(Auth::user()->admin())
                   <li><a href="{{ route('panel-de-administrador.users.index') }}">Usuarios<span class="sr-only">(current)</span></a></li>

                   <li><a href="{{ route('panel-de-administrador.clientes.index') }}">
                   Clientes</a></li>
                  @endif

                  @if(Auth::user()->trainer())
                    <li><a href="{{ route('panel-de-administrador.clientes.index') }}">
                   Clientes</a></li>
                  @endif
                  @if(Auth::user()->admin())
                   <li><a href="{{ route('panel-de-administrador.categories.index') }}">
                   Categorias</a></li>
                   <li><a href="{{ route('panel-de-administrador.articles.index') }}">
                   Articulos</a></li>

                   <li><a href="{{ route('panel-de-administrador.mensajes.index') }}">
                   Mensajes</a></li>
                   @endif
                 </ul>
               
                 <ul class="nav navbar-nav navbar-right">

                   <li class="dropdown espacio">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-fw"></i> {{Auth::user()->email }} <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                       <li><a href="{{ route('panel-de-administrador.sessions.edit',Auth::user()->id)}}">Cambiar Contraseña</a></li>
                       <li><a href="#">Another action</a></li>
                       <li><a href="#">Something else here</a></li>
                       <li role="separator" class="divider"></li>
                       <li><a href="{{ route('inicio.auth.logout') }}">Salir</a></li>
                     </ul>
                   </li>
                 </ul>
               </div><!-- /.navbar-collapse -->
           </nav>
         </div>
<!--##########FIN MENU SUPERIOR##############-->
       
        <div class="container-fluid">
            <div class="row">
<!--##########MENU LATERAL##############-->
                    <div class="col-sm-3 col-md-2 sidebar">
                      @if(Auth::user()->admin())
                      <br>
                      <br>
                        <ul class="nav nav-sidebar">
                          <li class="active"><a>Usuarios <span class="sr-only">(current)</span></a></li>
                          <li><a href="{{ route('panel-de-administrador.users.index') }}">Inicio</a></li>
                          <li><a href="{{ route('panel-de-administrador.users.create') }}">Crear usuario</a></li>
                        </ul>
                          <ul class="nav nav-sidebar">
                          <li class="active"><a>Clientes<span class="sr-only">(current)</span></a></li>
                          <li><a href="{{ route('panel-de-administrador.clientes.index') }}">Inicio</a></li>
                          <li><a href="{{ route('panel-de-administrador.clientes.create') }}">Crear cliente</a></li>
                        </ul>
                       @endif
                      @if(Auth::user()->trainer())
                        <ul class="nav nav-sidebar">
                          <li class="active"><a>Clientes<span class="sr-only">(current)</span></a></li>
                          <li><a href="{{ route('panel-de-administrador.clientes.index') }}">Inicio</a></li>
                        </ul>
                      @endif
                      @if(Auth::user()->admin())
                      <ul class="nav nav-sidebar">
                        <li class="active"><a>Categorias <span class="sr-only">(current)</span></a></li>
                        <li><a href="{{ route('panel-de-administrador.categories.index') }}">Inicio</a></li>
                        <li><a href="{{ route('panel-de-administrador.categories.create') }}">Añadir categoria</a></li>
                      </ul>
                      @endif
                      <ul class="nav nav-sidebar">
                        <li class="active"><a>Articulos <span class="sr-only">(current)</span></a></li>
                        @if(Auth::user()->admin())
                        <li><a href="{{ route('panel-de-administrador.articles.index') }}">Inicio</a></li>
                        @endif
                        <li><a href="{{ route('panel-de-administrador.articles.create') }}">Nuevo Articulo</a></li>
                        @if(Auth::user()->admin())
                        <li>

                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
                           .........Buscar Articulo........
                          </button>
                        </li>
                        @endif 
                          </ul>
                        </div>
                      </ul>
                      <!-- Modal -->
                      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="myModalLabel">bienvenido sr (a) {{ Auth::user()->name }}</h4>
                            </div>
                            <div class="modal-body">
                                
                                  <h4>Busqueda de articulos</h4>
                                    {!! Form::open(['route'=>'panel-de-administrador.users.index','method'=>'GET']) !!}
                                      <div class="form-group">
                                        {!! Form::label('title','Titulo') !!}
                                        {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'Titulo del articulo']) !!}
                                      </div>
                                      <div class="input-group">
                                        {!! Form::submit('Buscar Articulo',['class'=>'btn btn-info'])!!}
                                      </div>


                                    {!! Form::close() !!} 
                               
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        
                      </div>
                    </div>
<!--##########FIN MENU LATERAL##############-->
                    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<!--##########VISTAS DE LOS PANELES##############--> 

                        <section>
                            
                            @yield('content')
                        </section>  

                        <footer>
                          @include('publics/footer')
                        </footer>  
                    </div>
                </div>
        </div>
<!--Panel de escript-->
   <script src="{{asset('bootstrap/js/jQuery.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{ asset('plugines/chosen/chosen.jquery.js') }}"></script>
    <script src="{{ asset('plugines/trumbowyg/trumbowyg.js') }}"></script>
    <script src="{{ asset('plugines/multifile-master/jquery.MultiFile.js') }}"></script>
    <script src="{{asset('js/scriptportada.js')}}"></script>
    @yield('js')
</body>
        </html>