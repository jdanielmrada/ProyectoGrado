@extends('admin.main')
  @section('content')

  	<table class="table table-striped table-hover">
          <p><h2 class="fa fa-list-alt fa-lg"> Lista de usuarios registrado</h2>
            <thead>
              <tr>
                <th>Nombre y Apellido</th>
                <th>Cedula</th>
                <th>Sexo</th>
                <th>Telefono</th>
                <th>Dirección</th>
                <th>Ultima actualización</th>
              </tr>
            </thead>
            <tbody>
            		<tr class="default">
            		  <td>{{ $user->dato->name }}</td>
            		  <td>{{ $user->dato->cedula }}</td>
            		  <td>{{ $user->dato->sexo }}</td>
                  <td>{{ $user->dato->telefono }}</td>
            		  <td>{{ $user->dato->direction }}</td>
            		  <td>{{ $user->updated_at }}</td>

                <td><a class="btn btn-warning" href="{{ route('panel-de-administrador.users.inforedit',$user->id) }}" onclick="return confirm('¿Editar usuario?')">
                <i class="fa fa-files-o -o fa-lg"></i> Editar</a></td>

            		</tr>
            </tbody>
          </table> 
        
  @endsection