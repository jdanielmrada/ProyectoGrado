@extends('admin.main')
  @section('content')

   <!-- <form class="navbar-form navbar-right" role="search" method="GET" action="">
      <div class="form-group"> 
        <input class="form-control" name="name" placeholder="Search/Buscar "  type="text">
      </div>
      <button type="submit" id="search" class="btn btn-default"><i class="fa fa-search"></i>
      </button>
    </form> -->

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
            		  <td>{{ $user->name }}</td>
            		  <td>{{ $user->email }}</td>
                  <td>
                    @if($user->role== 'admin')
                       <span class='label label-success'>{{ $user->role }}</span>
                    @else
                      {{ $user->role }}
                    @endif
            		  </td>
            		  <td>{{ $user->created_at }}</td>
            		  <td>{{ $user->updated_at }}</td>
            		  <td><a class="btn btn-danger" href="" onclick="return confirm('Estas a punto de eliminar este usuario ¿Eliminar?')">
  							<i class="fa fa-trash-o fa-lg"></i> Delete</a></td>
  					  <td><a class="btn btn-warning" href="" onclick="return confirm('¿Editar usuario?')">
  							<i class="fa fa-files-o -o fa-lg"></i> Editar</a></td>
            		</tr>
            	@endforeach
            </tbody>
          </table> 
          {!! $users->render() !!}
  @endsection