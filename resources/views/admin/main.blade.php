<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Default')Panel de Administración</title>   
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('font-awesome-4.6.3/css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Css/main.css')}}">
</head>

<body>

    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Tauro Gim Fitnnes</a>
        </div>
          <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
              <input class="form-control" placeholder="Search/Buscar " type="text">
            </div>
            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i>
            </button>
          </form>
        </div>
    </nav>

    <!--Menu del panel de administración-->

  <div class='container'> 

    <div class="btn-group">
      <a class="btn btn-primary" href="{{route('panel-de-administrador.users.index')}}"><i class="fa fa-clipboard fa-fw"></i> Usuarios </a>
      <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
        <span class="fa fa-caret-down" title="Toggle dropdown menu"></span>
      </a>
      <ul class="dropdown-menu">
        <li><a href="{{route('panel-de-administrador.users.create')}}"><i class="fa fa-pencil fa-fw"></i>Cear un Usuario nuevo</a></li>
        <li><a href="#"><i class="fa fa-trash-o fa-fw"></i> Delete</a></li>
        <li><a href="#"><i class="fa fa-ban fa-fw"></i> Ban</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="fa fa-unlock"></i> Make admin</a></li>
      </ul>
    </div>

 
      <div class="btn-group">
      <a class="btn btn-info" href=""><i class="fa fa-users fa-fw"></i> Clientes </a>
      <a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
        <span class="fa fa-caret-down" title="Toggle dropdown menu"></span>
      </a>
      <ul class="dropdown-menu">
        <li><a href=""><i class="fa fa-user-plus fa-fw"></i> Registrar </a></li>
        <li><a href="#"><i class="fa fa-trash-o fa-fw"></i> Inscripciones </a></li>
        <li><a href="#"><i class="fa fa-ban fa-fw"></i> Ultimas mensualidades </a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="fa fa-unlock"></i> Make admin</a></li>
      </ul>
      </div>


    <div class="btn-group navbar-right">
      <a class="btn btn-default" href="#"><i class="fa fa-user fa-fw"></i></a>
      <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
        <span class="fa fa-caret-down" title="Toggle dropdown menu"></span>
      </a>
      <ul class="dropdown-menu">
        <li><a href="" onclick="return confirm('¿Deseas editar tu usuario?')"><i class="fa fa-pencil fa-fw"></i> Editar tus datos</a></li>
        <li><a href="" onclick="return confirm('¿Estas seguro de editar tu Contraseña?')"><i class="fa fa-trash-o fa-fw"></i> ¿ Cambiar contraseña? </a></li>
        <li><a href="#"><i class="fa fa-ban fa-fw"></i> Ban</a></li>
        <li class="divider"></li>
        <li><a href=""><i class="fa fa-unlock"></i> Salir </a></li>
      </ul>
    </div>
<!--Fin del panel acministrador-->
    <br>
<section>
  <div id="page-wrapper">
      <br>
      @include('flash::message')
      @include('admin.errors')
      @yield('content')
  </div>
</section>

  </div>
  <br>
  <br>
<div class='container'>
   <div class="row">
     <footer class='footer text-success'>
     <p><span> Tauro Gim Fitnnes, C.A</span></p>
     <p><span>Todo los derechos reservados</span></p>
     </footer>
    </div>
</div>

        

    </div>
    
    <script src="{{asset('bootstrap/js/jQuery.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('js/janko/formToWizard.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#SignupForm").formToWizard({ submitButton: 'SaveAccount' })
        });
    </script>
    <script src="{{asset('js/clonjs/jquery.addfield.js')}}"></script>

</body>

</html>
