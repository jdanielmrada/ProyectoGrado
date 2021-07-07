@extends('admin.main')
  @section('content')
	<br>
    <!-- Buscador de clientes --> 
      {!! Form::open(['route'=>'panel-de-administrador.clientes.index', 'method'=>'GET', 'class'=>'navbar-form pull-right']) !!}
          <div class="input-group margin-bottom-sm">
          <span for="inputNombre" class="input-group-addon"><i class="fa fa-search fa-fw" aria-hidden="true"></i></span>
          {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombres','required'])!!}
        </div>
      {!! Form::close() !!}
    <!-- Fin de buscador -->
	<table class="table table-striped table-hover">
          <p><h2 class="fa fa-list-alt fa-lg"> Lista de clientes registrado</h2>
            <thead>
              <tr>
                <th>Nombre y Apellido</th>
                <th>Cedula</th>
                <th>Creador</th>
                <th>Creado</th>
                <th>Inscripción</th>
              </tr>
            </thead>
            <tbody>
            	@foreach ($clientes as $cliente)
            		<tr class="default">
            		  <td>{{ $cliente->user->dato->name }}</td>
            		  <td>{{ $cliente->user->dato->cedula }}</td>
                  <td>{{ $cliente->creador }}</td>
            		  <td>{{ $cliente->created_at }}</td>

                  @foreach($cliente->inscripciones as $inscripcion)
                    <td>{{ $inscripcion->updated_at }}</td>
                  @endforeach
               <td><a class="btn btn-warning" href="{{ route('panel-de-administrador.pagos.show',$inscripcion->id) }}" onclick="return confirm('¿Visualizar los pagos?')">
                    <i class="fa fa-files-o -o fa-lg"></i> Pagos</a></td>
       				 <td><a class="btn btn-danger" href="{{ route('PDFS.edit',$cliente->id) }}"> Imprimir</a></td>
       				 <td><a class="btn btn-info" href="{{ route('panel-de-administrador.clientes.show',$cliente->id) }}" onclick="return confirm('¿Visualizar los datos personales?')">
  							<i class="fa fa-trash-o fa-lg"></i> Detalles</a></td>
  
            		</tr>
            	@endforeach
            </tbody>
          </table> 
          {!! $clientes->render() !!}
		
  @endsection