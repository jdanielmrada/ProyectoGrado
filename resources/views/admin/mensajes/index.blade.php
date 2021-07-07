@extends('admin.main');

@section('title','Crear usuario')

@section('content')
<br>
<br>
	<div class="table-responsive">
		@include('flash::message')
				<table class="table table-striped table-hover">
			        <p><h4 class="fa fa-list-alt fa-lg"> Lista de Mensajes</h4>
			          <thead>
			            <tr>
			              <th>ID</th>
			              <th>Nombre</th>
			              <th>Email</th>
			              <th>Numero telefonico</th>
			              <th>Mensaje</th>
			              <th>Enviado</th>
			            </tr>
			          </thead>
			          <tbody>
			          	@foreach ($mensajes as $mensaje)
			          		<tr class="default">
			          		  <td>{{ $mensaje->id }}</td>
			          		  <td>{{ $mensaje->name }}</td>
			          		  <td>{{ $mensaje->email }}</td>
			          		  <td>{{ $mensaje->number }}</td>
			          		  <td>{{ $mensaje->message }}</td>
			          		  <td>{{ $mensaje->created_at->diffForHumans() }}</td>
			          		  <td><a class="btn btn-danger" href="{{ route('panel-de-administrador.mensajes.destroy',$mensaje->id) }}" onclick="return confirm('Estas a punto de eliminar este usuario ¿Eliminar?')">
										<i class="fa fa-trash-o fa-lg"></i> Delete</a></td>
			          		</tr>
			          	@endforeach
			          </tbody>
			        </table> 
			        {!! $mensajes->render() !!}		
	</div>
		

@endsection