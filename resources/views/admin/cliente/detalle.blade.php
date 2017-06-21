@extends('admin.main')
  @section('content')
	<br>
	<table class="table table-striped table-hover">
          <p><h2 class="fa fa-list-alt fa-lg"> {{ $cliente->cedula }}</h2>
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Cedula</th>
                <th>Creador</th>
                <th>Creado</th>                       
              </tr>
            </thead>
            <tbody>
            		<tr class="default">
            		  <td>{{ $cliente->id }}</td>
            		  <td>{{ $cliente->user->dato->name }}</td>
            		  <td>{{ $cliente->user->dato->cedula }}</td>
                  <td>{{ $cliente->creador }}</td>
                  <td>{{ $cliente->created_at }}</td>
       					</tr>
            </tbody>
            <thead>
              <tr>
                <th>Sexo</th>
                <th>Antecedente Medico</th>
                <th>telefono</th>
                <th>Dirección</th>
                <th>Ultima actualización</th>            
              </tr>
            </thead>
            <tbody>
                <tr class="default">
                  <td>{{ $cliente->user->dato->sexo }}</td>
                  <td>{{ $cliente->antecedente_medico }}</td>
                  <td>{{ $cliente->user->dato->telefono }}</td>
                  <td>{{ $cliente->user->dato->direction }}</td>
                  <td>{{ $cliente->updated_at }}</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                <td colspan="2"></td>
         				 <td colspan=""><a class="btn btn-danger" href="{{ route('panel-de-administrador.clientes.destroy',$cliente->id) }}" onclick="return confirm('¿Esta conciente de eliminar a este usuario? Todo los datos de pagos tambien seran eliminados')">
    							<i class="fa fa-trash-o fa-lg"></i> Eliminar a {{ $cliente->user->dato->name }}  </a></td>
    
    					  <td><a class="btn btn-warning" href="{{ route('panel-de-administrador.clientes.edit',$cliente->inscripcion->id) }}" onclick="return confirm('¿Desea realizar cambios en el cliente?')">
    							<i class="fa fa-files-o -o fa-lg"></i> Editar a {{ $cliente->user->dato->name }}</a></td>
                  <td></td>
            		</tr>
            </tbody>
          </table> 
		
  @endsection