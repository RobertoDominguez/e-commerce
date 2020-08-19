@extends ('admin.layouts.header')

@section('content')
<body>
    <div class="row">
        <div class="col-12">
            <div class="card card-secondary">
                <div class="card-header">
                  <h3 class="card-title">Agregar extra</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                  <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> Verifica los datos.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.store_extra') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Nombre:</strong>
                                    <input type="text" name="nombre" value="" maxlength="50" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Precio:</strong>
                                    <input type="number" name="precio" value="1" min="1" max="999" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Categoria:</strong>
                                    <div>
                                        <select id="editType" name="id_categoria" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                        @foreach ($categorias as $categoria)
                                            <option  value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                                        @endforeach                                       
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Guardar</button>
                                    <a class="btn btn-primary" href="{{ route('admin.extras') }}">Atras</a>
                                </div>
                            </div>
                        </div>
                    </form>
                  </div>
                  <!-- /.card-body -->
              </div>
        </div>
    </div>

</body>
@endsection