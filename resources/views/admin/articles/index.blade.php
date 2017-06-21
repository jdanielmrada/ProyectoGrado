@extends('admin.main');

@section('title','Crear usuario')

@section('content')
<br>
<br>
	<div class="table-responsive">
		@include('flash::message')
				<table class="table table-striped table-hover">
			        <p><h4 class="fa fa-list-alt fa-lg"> Lista de Articulos</h4>
			          <thead>
			            <tr>
			              <th>ID</th>
			              <th>Titulo</th>
			              <th>Categoria</th>
			              
			              <th>Creador</th>
			              <th>Ultima actualización</th>
			            </tr>
			          </thead>
			          <tbody>
			          	@foreach ($articles as $article)
			          		<tr class="default">
			          		  <td>{{ $article->id }}</td>
			          		  <td>{{ $article->title }}</td>
			          		  <td>{{ $article->category->name }}</td>
			          		  
			          		  <td>{{ $article->user->dato->name }}</td>
			          		  <td>{{ $article->updated_at->diffForHumans() }}</td>
			          		  <td><a class="btn btn-danger" href="{{ route('panel-de-administrador.articles.destroy',$article->id) }}" onclick="return confirm('Estas a punto de eliminar este usuario ¿Eliminar?')">
										<i class="fa fa-trash-o fa-lg"></i> Delete</a></td>
								  <td><a class="btn btn-warning" href="{{ route('panel-de-administrador.articles.edit',$article->id) }}" onclick="return confirm('¿Editar usuario?')">
										<i class="fa fa-files-o -o fa-lg"></i> Editar</a></td>
			          		</tr>
			          	@endforeach
			          </tbody>
			        </table> 
			        {!! $articles->render() !!}		
	</div>
		

@endsection