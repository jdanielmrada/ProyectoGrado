@extends('admin.main')
  @section('content')
  <br>
  <br>
  	<div class="container container-formulario">
    {!! Form::open(['route'=>'panel-de-administrador.clientes.store', 'method'=>'POST','class'=>''])!!}
       <div class="jumbotron formularios"> 
        <div class="form-group">
          {!! Form::label('email','Email') !!}
          
          {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'email','required'])!!}
        </div>

        <div class="form-group">
          {!! Form::hidden('password', '0000',['class'=>'form-control','required'])!!}
        </div>

        <div class="form-group">
          {!! Form::hidden('role','client',['class'=>'form-control','required'])!!}
        </div>

        <div class="form-group">
          {!! Form::label('antecedente_medico','Antecedente') !!}
          
          {!! Form::text('antecedente_medico',null,['class'=>'form-control','placeholder'=>'Antecedentes medicos','required'])!!}
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
         
        {!! Form::hidden('creador', Auth::user()->email,['class'=>'form-control','required'])!!}   
          
        <div class="form-group">
           {!! Form::label('peso','Peso') !!}
          {!! Form::select('pesos[]',$peso, null, ['class'=>'form-control select-mes','multiple'])!!}
        </div>

        <div class="form-group">
           {!! Form::label('altura','Altura') !!}
          {!! Form::select('alturas[]',$altura, null, ['class'=>'form-control select-mes','multiple'])!!}
        </div>

        <div class="form-group">
          {!! Form::label('fecha_corte_inscripcion','DDMMAA inscripción') !!}
          
          {!! Form::text('fecha_corte_inscripcion',null,['class'=>'form-control','placeholder'=>'email','required'])!!}
        </div>

        <div class="form-group">
          {!! Form::label('fecha_corte_mensualidad','DDMMAA imensualidad') !!}
          
          {!! Form::text('fecha_corte_mensualidad',null,['class'=>'form-control','placeholder'=>'email','required'])!!}
        </div>

        <div class="form-group">
           {!! Form::label('mes','Meses') !!}
          {!! Form::select('meses[]',$mes, null, ['class'=>'form-control select-mes','multiple'])!!}
        </div>    
            
        
        <div class="form-group">
          {!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
        </div>
      </div>
    {!! Form::close()!!}
  	  
  	</form>
  	</div>
  @endsection
  @section('js')
    <script>
    $('.select-mes').chosen({
      placeholder_text_multiple: 'seleciones los mese que el cliente quiere pagar'
    });
  </script>
  @endsection
  