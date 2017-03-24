@extends('admin.main')
  @section('content')
	<br>
	<table class="table table-striped table-hover">
          <p><h2 class="fa fa-list-alt fa-lg"> Lista de clientes registrado</h2>
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre y Apellido</th>
                <th>Cedula</th>
                <th>Creador</th>
                <th>Creado</th>
            
              </tr>
            </thead>
            <tbody>
            	@foreach ($clientes as $cliente)
            		<tr class="default">
            		  <td>{{ $cliente->id }}</td>
            		  <td>{{ $cliente->nombre }} {{ $cliente->apellido }}</td>
            		  <td>{{ $cliente->cedula }}</td>
                  	  <td>{{ $cliente->user->name }}</td>
            		  <td>{{ $cliente->created_at }}</td>
       					
       				 <td><a class="btn btn-info" href="{{ route('panel-de-administrador.clientes.show',$cliente->id) }}">
  							<i class="fa fa-trash-o fa-lg"></i> Detalles</a></td>
            		  <td><a class="btn btn-danger" href="{{ route('panel-de-administrador.clientes.destroy',$cliente->id) }}" onclick="return confirm('Estas a punto de eliminar este usuario ¿Eliminar?')">
  							<i class="fa fa-trash-o fa-lg"></i> Delete</a></td>
  					  <td><a class="btn btn-warning" href="{{ route('panel-de-administrador.clientes.edit',$cliente->id) }}" onclick="return confirm('¿Editar usuario?')">
  							<i class="fa fa-files-o -o fa-lg"></i> Editar</a></td>
            		</tr>
            	@endforeach
            </tbody>
          </table> 
          {!! $clientes->render() !!}
		
  @endsection