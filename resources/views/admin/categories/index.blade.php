@extends ('admin.layouts.header')

@section('content')


            <div class="card card-secondary">
                <div class="card-header">
                <h3 class="card-title">categorias</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <div class="card-body">

                    <div class="container">      
                        
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Categorias</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Nombre</th>
                                                <th></th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($categorias as $categoria)
                                            <tr>
                                                <td>{{ $categoria->nombre }}</td>
                                               @if ($categoria->id!=1 && $categoria->id!=2)
                                                <td>
                                                    <a class="btn btn-primary" href="{{route('admin.view_edit_categorie',$categoria->id)}}">Editar</a>
                                                    <form action="{{route('admin.delete_categorie',$categoria->id)}}" method="post">
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger" >Eliminar</button>
                                                    </form>
                                                </td>
                                                @else
                                                <td>
                                                </td>
                                                @endif
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <a class="btn btn-warning" href="{{ route('admin.add_categorie') }}">Agregar</a>
                </div>
            </div>


@endsection