@extends('clientANDtrainer.main')
  @section('content')

<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Bienvenido <small>{{Auth::user()->email}}</small>
                        </h1>

                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Sistema neati?</strong> Escribenos <a href="{{route('welcome.contacto')}}">Contacto</a> Si tiene cualquier duda sobre neati recuerda que puedes contactarte a traves de un correo!
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{$blocks->count()}}</div>
                                        <div>Nuevos comentarios</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('panel-de-administrador.block.index') }}">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver comentarios</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{$articles->count()}}</div>
                                        <div>Nuevos articulos publicados!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('welcome.galeria') }}">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver detalles de tus articulos</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->


                <!-- /.row -->

                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Tasks Panel</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <span class="badge">just now</span>
                                        <i class="fa fa-fw fa-calendar"></i> Calendar updated
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">4 minutes ago</span>
                                        <i class="fa fa-fw fa-comment"></i> Commented on a post
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">23 minutes ago</span>
                                        <i class="fa fa-fw fa-truck"></i> Order 392 shipped
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">46 minutes ago</span>
                                        <i class="fa fa-fw fa-money"></i> Invoice 653 has been paid
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">1 hour ago</span>
                                        <i class="fa fa-fw fa-user"></i> A new user has been added
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">2 hours ago</span>
                                        <i class="fa fa-fw fa-check"></i> Completed task: "pick up dry cleaning"
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">yesterday</span>
                                        <i class="fa fa-fw fa-globe"></i> Saved the world
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">two days ago</span>
                                        <i class="fa fa-fw fa-check"></i> Completed task: "fix error on sales page"
                                    </a>
                                </div>
                                <div class="text-right">
                                    <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Tus Publicaciones</h3>
                            </div>

                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
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
                @foreach($articles as $article)
                @if((Auth::user()->email == $article->user->email) || (Auth::user()->admin() ))

                    <tr>

                        <tr class="default">
                          <td>{{ $article->id }}</td>
                          <td>{{ $article->title }}</td>
                          <td>{{ $article->category->name }}</td>

                          <td>{{ $article->user->dato->name }}</td>
                          <td>{{ $article->updated_at->diffForHumans() }}</td>
                          <td><a class="btn btn-danger" href="{{ route('panel-de-administrador.clientTrainers.destroy',$article->id) }}" onclick="return confirm('Estas a punto de eliminar este usuario ¿Eliminar?')">
                                    <i class="fa fa-trash-o fa-lg"></i> Delete</a></td>
                              <td><a class="btn btn-warning" href="{{ route('panel-de-administrador.clientTrainers.edit',$article->id) }}" onclick="return confirm('¿Editar usuario?')">
                                    <i class="fa fa-files-o -o fa-lg"></i> Editar</a></td>


                        </tr>

                </tr>

                @endif
                @endforeach
            </tbody>

                                    </table>
                                </div>
                                <div class="text-right">
                                    <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
          @endsection
