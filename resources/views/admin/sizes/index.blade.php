@extends ('admin.layouts.header')

@section('content')
<body>

            <div class="card card-secondary">
                <div class="card-header">
                <h3 class="card-title">Tamaños</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <div class="card-body">
                    <div class="container">  
                        
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Tamaños</div>
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
                                            @foreach ($tamanos as $tamano)
                                            <tr>
                                                <td>{{ $tamano->nombre }}</td>
                                                <td>
                                                    @if ($tamano->id!=1)
                                                    <form action="{{route('admin.delete_tamano',$tamano->id)}}" method="post">
                                                        {{ csrf_field() }}
                                                        <a class="btn btn-primary" href="{{route('admin.view_edit_tamano',$tamano->id)}}">Editar</a>
                                                        <a class="btn btn-success" href="{{route('admin.view_tamano_product',$tamano->id)}}">Añadir a producto</a>
                                                        <button type="submit" class="btn btn-danger" >Eliminar</button>
                                                    </form>
                                                    @endif
                                                </td>
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
                    <a class="btn btn-warning" href="{{ route('admin.add_tamano') }}">Agregar</a>
                </div>
            </div>

</body>
@endsection