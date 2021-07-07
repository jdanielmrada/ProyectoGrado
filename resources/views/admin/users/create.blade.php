@extends('admin.main')
  @section('content')
  <br>
  <br>
  	
    {!! Form::open(['route'=>'panel-de-administrador.users.store', 'method'=>'POST'])!!}
        <div class="jumbotron formularios"> 
         <div class="form-group">
           {!! Form::label('email','Email') !!}
           
           {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'email','required'])!!}
         </div>

         <div class="form-group">
           {!! Form::hidden('password','000000',['class'=>'form-control','required'])!!}
         </div>

         <div class="form-group">
           {!! Form::label('role','Role') !!}
            
           {!! Form::select('role',['admin'=> 'Administrador','trainer'=>'Instructor'], null, ['class'=>'form-control'])!!}
         </div>

         <div class="form-group">
          {!! Form::label('nombre','Nombre y Apellido') !!}
          
          {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombres','required'])!!}
        </div>


        <div class="form-group">
          {!! Form::label('cedula','Cedula') !!}
           
          {!! Form::number('cedula',null,['class'=>'form-control','placeholder'=>'Cedula','required'])!!}
        </div>

        <div class="form-group">
          {!! Form::label('sexo','Sexo') !!}
           
          {!! Form::select('sexo',['Hombre'=> 'Hombre', 'Mujer'=> 'Mujer'], null, ['class'=>'form-control'])!!}
        </div>
        
        <div class="form-group">
        {!! Form::label('telefono','Telefono') !!}
          
          {!! Form::number('telefono',null,['class'=>'form-control','placeholder'=>'Telefono /casa/movil','required'])!!}
        </div>
        
        <div class="form-group">
          {!! Form::label('direction','Dirección') !!}
          {!! Form::text('direction',null,['class'=>'form-control','placeholder'=>'Dirección','required'])!!}
        </div>
         <div class="form-group">
          {!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
        </div>
      </div>
    {!! Form::close()!!}
  	  
  	</form>

  @endsection
  @section('js')
    <script>
      $('.select-category').chosen();
      $('.textarea-contet').trumbowyg();
    </script>
  @endsection