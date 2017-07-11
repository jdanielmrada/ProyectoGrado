@extends('main')

@section('title','Inicio')

@section('content-banner')

  <div class="container imagenMuestra2">
    <div class="row centro">
      <div class="col-md-4">

        <div class="jumbotron formularios">

              <form id='inicio' class="" name="formulario_registro" method="POST" action="{{route('inicio.auth.login')}}">
            
            <div>
              <div class="imput-group">

                  <label for="email">Email</label>
                  <input class="" id="email" name='email' type="email" value="{{ old('email') }}">
                  
              </div>
            
              <div class="imput-group">

                  <label for="password">Contraseña</label>
                  <input  id="password" name='password' type="password">
                  
              </div>

              <input name="_token" value="{{csrf_token()}}" type="hidden">

              <div class="imput-group"> 
                <a href=""><samp>Olvidastes tu password?</samp></a>
                <br>
               
                  <button class="btn btn-info" value="submit">Ingresar</button>

              </div>
            </div>
              
          </form>
           
         </div>
          
        </div>
        <div class="col-md-8">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/REG82hlBWLQ" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      
    </div>

@endsection

