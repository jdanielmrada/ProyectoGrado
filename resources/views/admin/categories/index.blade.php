@extends('admin.main');

@section('title','Crear usuario')

@section('content')
<br>
<br>
	<div class="table-responsive">
					@include('flash::message')
					<table class="table table-striped table-hover">
				        <p><h4 class="fa fa-list-alt fa-lg"> Lista de Categorias</h4>
				          <thead>
				            <tr>
				              <th>ID</th>
				              <th>Nombre</th>
				              <th>Creado</th>
				              <th>Ultima actualización</th>
				            </tr>
				          </thead>
				          <tbody>
				          	@foreach ($categories as $category)
				          		<tr class="default">
				          		  <td>{{ $category->id }}</td>
				          		  <td>{{ $category->name }}</td>
				          		  <td>{{ $category->created_at->diffForHumans() }}</td>
				          		  <td>{{ $category->updated_at->diffForHumans() }}</td>
				          		  <td><a class="btn btn-danger" href="{{ route('panel-de-administrador.categories.destroy',$category->id) }}" onclick="return confirm('Estas a punto de eliminar este usuario ¿Eliminar?')">
											<i class="fa fa-trash-o fa-lg"></i> Delete</a></td>
									  <td><a class="btn btn-warning" href="{{ route('panel-de-administrador.categories.edit',$category->id) }}" onclick="return confirm('¿Editar usuario?')">
											<i class="fa fa-files-o -o fa-lg"></i> Editar</a></td>
				          		</tr>
				          	@endforeach
				          </tbody>
				        </table> 
				        {!! $categories->render() !!}
			
	</div>
		

@endsection