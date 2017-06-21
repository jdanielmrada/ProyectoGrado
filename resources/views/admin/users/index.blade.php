@extends('admin.main')
  @section('content')
  <br>
  <br>
  @include('flash::message')
  	<table class="table table-striped table-hover">
          <p><h2 class="fa fa-list-alt fa-lg"> Lista de usuarios registrado</h2>
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre y Apellido</th>
                <th>Email</th>
                <th>Role</th>
                <th>Creado</th>
                <th>Ultima actualización</th>
              </tr>
            </thead>
            <tbody>
            	@foreach ($users as $user)
            		<tr class="default">
            		  <td>{{ $user->id }}</td>
            		  <td>{{ $user->dato->name }}</td>
            		  <td>{{ $user->email }}</td>
                  <td>
                    @if($user->role== 'admin')
                       <span class='label label-success'>{{ $user->role }}</span>
                    @else
                      {{ $user->role }}
                    @endif
            		  </td>
            		  <td>{{ $user->created_at }}</td>
            		  <td>{{ $user->updated_at->diffForHumans() }}</td>
            		  
  					      <td><a class="btn btn-info" href="{{ route('panel-de-administrador.users.informacion',$user->id) }}">
  							<i class="fa fa-files-o -o fa-lg"></i> Información</a></td>

                <td><a class="btn btn-warning" href="{{ route('panel-de-administrador.users.edit',$user->id) }}" onclick="return confirm('¿Editar usuario?')">
                <i class="fa fa-files-o -o fa-lg"></i> Editar</a></td>

                <td><a class="btn btn-danger" href="{{ route('panel-de-administrador.users.destroy',$user->id) }}" onclick="return confirm('Estas a punto de eliminar este usuario ¿Eliminar?')">
                <i class="fa fa-trash-o fa-lg"></i> Delete</a></td>
            		</tr>
            	@endforeach
            </tbody>
          </table> 
          {!! $users->render() !!}
  @endsection