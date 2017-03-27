@extends('admin.main')
  @section('content')
	<br>
	<table class="table table-striped table-hover">
          <p><h2 class="fa fa-list-alt fa-lg"> {{ $cliente->cedula }}</h2>
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Cedula</th>
                <th>Creador</th>                          
              </tr>
            </thead>
            <tbody>
            		<tr class="default">
            		  <td>{{ $cliente->id }}</td>
            		  <td>{{ $cliente->nombre }}</td>
                  <td>{{ $cliente->apellido }}</td>
            		  <td>{{ $cliente->cedula }}</td>
                  <td>{{ $cliente->user->name }}</td>
       					</tr>
            </tbody>
            <thead>
              <tr>
                <th>Sexo</th>
                <th>Antecedente Medico</th>
                <th>telefono</th>
                <th>Creado</th>
                <th>Ultima actualización</th>            
              </tr>
            </thead>
            <tbody>
                <tr class="default">
                  <td>{{ $cliente->sexo }}</td>
                  <td>{{ $cliente->antecedente }}</td>
                  <td>{{ $cliente->telefono }}</td>
                  <td>{{ $cliente->created_at }}</td>
                  <td>{{ $cliente->updated_at }}</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                <td colspan="2"></td>
         				 <td colspan=""><a class="btn btn-danger" href="{{ route('panel-de-administrador.clientes.destroy',$cliente->id) }}" onclick="return confirm('¿Esta conciente de eliminar a este usuario? Todo los datos de pagos tambien seran eliminados')">
    							<i class="fa fa-trash-o fa-lg"></i> Eliminar a {{ $cliente->nombre }}  </a></td>
    
    					  <td><a class="btn btn-warning" href="{{ route('panel-de-administrador.clientes.edit',$cliente->inscripcion->id) }}" onclick="return confirm('¿Desea realizar cambios en el cliente?')">
    							<i class="fa fa-files-o -o fa-lg"></i> Editar a {{ $cliente->nombre }}</a></td>
                  <td></td>
            		</tr>
            </tbody>
          </table> 
		
  @endsection