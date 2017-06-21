@extends('admin.main')  
 @section('content')   
 <br>  
  <table class="table table-striped table-hover">          
   <p><h2 class="fa fa-list-alt fa-lg"> {{$inscripcion->cliente->cedula }}</h2>        
   <thead>               
   <tr>
      <th>ID</th>           
      <th>Fecha de inscripción</th> 
      <th>Ultimo Pago de mensualidad</th>
      <th>Meses Pagados</th>                 
      <th>Cliente</th>
  </tr>             
    </thead>             
      <tbody>                 
        <tr class="default">                   
           <td>{{ $inscripcion->id }}</td>
           <td>{{ $inscripcion->updated_at }}</td>                     
           <td>{{$inscripcion->mensualidad->updated_at }}</td> 
           <td>
             @foreach ($my_meses as $my_mes)
              {{$my_mes}}
             @endforeach
           </td> 
           <td>{{$inscripcion->cliente->user->dato->name }}</td>              
        </tr> 
      </tbody>      
      <tbody>  
        <tr>  
           <td colspan="2"></td> 
           <td colspan=""><a class="btn btn-danger" href="{{ route('panel-de-administrador.pagos.edit',$inscripcion->id) }}"
             onclick="return confirm('¿Desea reinscribir a este cliente?')">
             <i class="fa fa-trash-o fa-lg"></i> Reinscribir a {{$inscripcion->cliente->user->dato->name }}</a></td>
      
      		 <td><a class="btn btn-warning" href="{{ route('panel-de-administrador.adicionpagos.edit',$inscripcion->id) }}" onclick="return confirm('¿Deseas adicional otro pago de mensualidad?')">
      							<i class="fa fa-files-o -o fa-lg"></i> Adicional otro(s) pago(s) de mes(es) a {{$inscripcion->cliente->nombre }} </a></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
    </table> 
		
  @endsection