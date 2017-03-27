@extends('admin.main')
  @section('content')
	<br>
	<table class="table table-striped table-hover">
          <p><h2 class="fa fa-list-alt fa-lg"> Lista de clientes registrado</h2>
            <thead>
              <tr>
                <th>Nombre y Apellido</th>
                <th>Cedula</th>
                <th>Inscripción</th>
                <th>Creador</th>
                <th>Creado</th>
            
              </tr>
            </thead>
            <tbody>
            	@foreach ($clientes as $cliente)
            		<tr class="default">
            		  <td>{{ $cliente->nombre }} {{ $cliente->apellido }}</td>
            		  <td>{{ $cliente->cedula }}</td>
                  <td>{{ $cliente->inscripcion->created_at }}</td>
                  <td>{{ $cliente->user->name }}</td>
            		  <td>{{ $cliente->created_at }}</td>
       					
       				 <td><a class="btn btn-info" href="{{ route('panel-de-administrador.clientes.show',$cliente->id) }}" onclick="return confirm('¿Visualizar los datos personales?')>
  							<i class="fa fa-trash-o fa-lg"></i> Detalles</a></td>
  
  					  <td><a class="btn btn-warning" href="{{ route('panel-de-administrador.clientes.edit',$cliente->inscripcion->id) }}" onclick="return confirm('¿Visualizar los pagos?')">
  							<i class="fa fa-files-o -o fa-lg"></i> Pagos</a></td>
            		</tr>
            	@endforeach
            </tbody>
          </table> 
          {!! $clientes->render() !!}
		
  @endsection