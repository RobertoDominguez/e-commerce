@extends ('admin.layouts.header')

@section('content')
<body>

            <div class="card card-secondary">
                <div class="card-header">
                <h3 class="card-title">Productos</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <div class="card-body">
                    <div class="container">  
                        
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Productos</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Descripcion</th>
                                                <th>Imagen</th>
                                                <th>Precio</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Descripcion</th>
                                                <th>Imagen</th>
                                                <th>Precio</th>
                                                <th></th>

                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($productos as $producto)
                                            <tr>
                                                <td>{{ $producto->nombre }}</td>
                                                <td>{{ $producto->descripcion }}</td>
                                                <td><img src="{{ asset("storage/$producto->imagen" ) }}" style="width: 100px; heigth: 100px" alt=""></td>
                                                <td>{{ $producto->precio.' Bs.' }}</td>
                                                <td>
                                                    <form action="{{route('admin.delete_product',$producto->id)}}" method="post">
                                                    <a class="btn btn-primary" href="{{route('admin.view_edit_product',$producto->id)}}">Editar</a>
                                                    
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger" >Eliminar</button>
                                                    </form>
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
                    <a class="btn btn-warning" href="{{ route('admin.add_product') }}">Agregar</a>
                </div>
            </div>

</body>
@endsection