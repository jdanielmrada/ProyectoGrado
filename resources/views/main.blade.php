<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title','Inicio')</title>   
        <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('font-awesome-4.6.3/css/font-awesome.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('bootstrap-social/bootstrap-social.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('css/mainportada.css')}}">
      <!--  <link rel="stylesheet" type="text/css" href="{{asset('css/sass/formulario.css')}}"> -->
        <link rel="stylesheet" type="text/css" href="{{asset('plugines/clean-slider/cleanSlider.css')}}">
        
    </head>
		
		    <body>
                <section class="jumbotron jumbotron-header">
                  <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="titulo-block"><img src="{{ asset('css/img/neati.png') }}" alt="" width="100">neati</h1>
                           <h6>nUtrición y eNtrenamiento a Través de la tEcnologia iNformatica</h6>
                            
                        </div>

                        <div class="col-md-6 hidden-xs hidden-sm text-right">
                            <h5>Siguenos en nuestro canal</h5>
                            <h1 class="titulo-block"><img src="{{ asset('css/img/youtube.png') }}" alt="" width="180"></h1>
                            
                        </div>
                    </div>
                    
                  </div>
                </section>
                <header>
                  @include('publics/menu')     
                </header>

                <section class="main container">
                  @yield('content-banner')
                </section>
                
                <footer>
                  @include('publics/footer')
                </footer>

        <script src="{{asset('bootstrap/js/jQuery.js')}}"></script>
        <script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
        <script src="{{ asset('plugines/clean-slider/jquery.cleanSlider.js') }}"></script>
        @yield('js')
  </body>
</html>