<!--##Cuando estas loguiado####-->
@if(Auth::user())

  <nav class="navbar navbar-inverse " role="navigation">
    <div class="container">
      <div class="nabvar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-jd">
          <span class="sr-only"> Desplegar / Ocultar Menu</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        @if(Auth::user()->admin())
          <a href="{{ route('panel-de-administrador.articles.create') }}" class="navbar-brand">neati</a>
        @else
          <a href="{{ route('panel-de-administrador.clientTrainers.index') }}" class="navbar-brand">neati</a>
        @endif
        
      </div>
      
      <!--Inicio de Menu-->
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="{{ route('welcome.index') }}">Inicio</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
            Categorias <span class="caret"></span> 
            </a>
            <ul class="dropdown-menu" role="menu">
              @foreach($categories as $category)
                <li><a href="{{ route('welcome.search.category', $category->name) }}">{{$category->name}}</a></li>
              @endforeach
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
            Publicaciones <span class="caret"></span> 
            </a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="{{ route('welcome.galeria') }}">Ver Todos</a></li>
                <li><a href="{{ route('panel-de-administrador.articles.create') }}"> Crear uno nuevo</a></li>
                <li></li>
              
            </ul>
          </li> 
          <li><a href="{{ route('welcome.contacto') }}">Contactos</a></li>
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

     <!--   {!! Form::open(['route'=>'panel-de-administrador.users.index','method'=>'GET','class'=>'nabvar-form navbar-right','role'=>'search']) !!}
          <div class="form-group">

            {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'Titulo del articulo']) !!}
          </div>
          <button type="submit" class="btn btn-primary navbar-right">
            <span class="glyphicon glyphicon-search"></span>
          </button>
            
        {!! Form::close() !!} -->
  
    </div>
  </nav>
   <!--####cuando no estas loguiado#####-->
 @else
  
  <nav class="navbar navbar-inverse" role="navigation">
    <div class="container">
      <div class="nabvar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-jd">
          <span class="sr-only"> Desplegar / Ocultar Menu</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="#" class="navbar-brand">Neati</a>
      </div>
      
      <!--Inicio de Menu-->
      <div class="collapse navbar-collapse" id="navegacion-jd">
        <ul class="nav navbar-nav">
          <li><a href="{{ route('welcome.index') }}">Inicio</a></li> 
          <li><a href="{{ route('welcome.contacto') }}">Contactos</a></li>
          <li class="izquierda"><a href="{{ route('welcome.ingreso') }}">Ingresar</a></li>
        </ul>

     
      </div>
  
    </div>
  </nav>

 @endif

<!--##########FIN MENU SUPERIOR##############-->
