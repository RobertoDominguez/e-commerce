@extends ('admin.layouts.header')

@section('content')
<body>
    <div class="row">
        <div class="col-12">
            <div class="card card-secondary">
                <div class="card-header">
                  <h3 class="card-title">Agregar producto</h3>
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

                    <form action="{{ route('admin.store_product') }}" method="POST" enctype="multipart/form-data">
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
                                    <strong>Descripción:</strong>
                                    <div class="input-group">
                                        <textarea name="descripcion" class="form-control" rows="4"></textarea>
                                      </div>
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
                                    <strong>Imagen:</strong>
                                    <div class="input-group">
                                        <input name="imagen" type="file" id="imagen" onchange="validarFile(this);">
                                      </div>
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
                                    <a class="btn btn-primary" href="{{ route('admin.products') }}">Atras</a>
                                </div>
                            </div>
                        </div>
                    </form>
                  </div>
                  <!-- /.card-body -->
              </div>
        </div>
    </div>

    <script>
        //Funcion de JS que valida el archivo ingresado al input. Formato y Tamaño.
        function validarFile(all)
        {
            //EXTENSIONES Y TAMANO PERMITIDO.
            var extensiones_permitidas = [".png", ".bmp", ".jpg", ".jpeg", ".pdf", ".doc", ".docx", ".gif"];
            var tamano = 8; // EXPRESADO EN MB.
            var rutayarchivo = all.value;
            var ultimo_punto = all.value.lastIndexOf(".");
            var extension = rutayarchivo.slice(ultimo_punto, rutayarchivo.length);
            if(extensiones_permitidas.indexOf(extension) == -1)
            {
                alert("Extensión de archivo no valida");
                document.getElementById(all.id).value = "";
                return; // Si la extension es no válida ya no chequeo lo de abajo.
            }
            if((all.files[0].size / 1048576) > tamano)
            {
                alert("El archivo no puede superar los "+tamano+"MB");
                document.getElementById(all.id).value = "";
                return;
            }
        }
    </script>
</body>
@endsection