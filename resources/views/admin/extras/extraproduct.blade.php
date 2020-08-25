@extends ('admin.layouts.header')

@section('content')
<body>

            <div class="card card-secondary">
                <div class="card-header">
                <h3 class="card-title">Añadir extra "{{$extra['nombre']}}" a productos</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <div class="card-body">
                    <div class="container">  
                        
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Añadir extra "{{$extra['nombre']}}" a productos</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nombre producto</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Nombre producto</th>
                                                <th></th>

                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($extra_productos as $extra_producto)
                                            <tr>
                                                <td>{{ $extra_producto->nombre_producto }}</td>
                                                <td>
                                                    <form action="{{route('admin.delete_extra_product',$extra_producto->id)}}" method="post">
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
                    <form action="{{route('admin.store_extra_product',$extra->id)}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <strong>Productos:</strong>
                            <div>
                                <select id="editType" name="id_producto" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                @foreach ($productos as $producto)
                                    <option  value="{{$producto->id}}">{{$producto->nombre}}</option>
                                @endforeach                                            
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning" >Agregar</button>
                        <a class="btn btn-success" href="{{ route('admin.extras') }}">Atras</a>
                    </form>
                </div>
            </div>

</body>
@endsection