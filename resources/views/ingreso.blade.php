@extends('main')

@section('title','Inicio')

@section('content-banner')

  <div class="container">
    <div class="row">
      <div class="col-md-4">

        <div class="jumbotron formularios">
            
              <form id='inicio' class="" name="formulario_registro" method="POST" action="{{route('inicio.auth.login')}}">
            
            <div>
              <div class="imput-group">
                  
                  <input id="email" name='email' type="email" value="{{ old('email') }}">
                  <label for="email">Email</label>

              </div>
            
              <div class="imput-group">
                  
                  <input  id="password" name='password' type="password">
                  <label for="password">Contraseña</label>

              </div>

              <div class="imput-group checkbox">
                  
                  <input  id="checkbox" name='terminos' type="terminos">
                  <label for="terminos">Acepto los terminos y condiciones</label>

              </div>

              <input name="_token" value="{{csrf_token()}}" type="hidden">

              <div class="imput-group"> 
                <a href=""><samp>Olvidastes tu password?</samp></a>
                <br>
               
                  <input type="submit" id="btn-submit" value="Ingresar">

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

