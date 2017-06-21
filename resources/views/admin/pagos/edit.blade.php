@extends('admin.main')
  @section('content')
  
  	<div class="container">

    {!! Form::open(['route'=>['panel-de-administrador.pagos.update',$inscripcion], 'method'=>'PUT','class'=>''])!!}

       <div class="jumbotron formularios">  

        <div class="form-group">
           {!! Form::label('mes','Meses') !!}
          {!! Form::select('meses[]',$mes, $my_meses, ['class'=>'form-control select-mes','multiple'])!!}
        </div>    
        <div class="form-group">
           {!! Form::hidden('mensualidad_id', $inscripcion->mensualidad_id,['class'=>'form-control','required'])!!}
         </div>
         <div class="form-group">
           {!! Form::hidden('inscripcion_id', $inscripcion->id,['class'=>'form-control','required'])!!}
         </div>          
        
        <div class="form-group">
          {!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
        </div>
      </div>
    {!! Form::close()!!}
  	  
  	</div>
  @endsection
  @section('js')
    <script>
    $('.select-mes').chosen({
      placeholder_text_multiple: 'seleciones los mese que el cliente quiere pagar'
    });
  </script>
  @endsection