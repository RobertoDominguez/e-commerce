@extends('layouts.header')

@section('title','Pedidos')

@section('ubicacion')
{{$tienda->ubicacion}}
@endsection
@section('email')
{{$tienda->email}}
@endsection
@section('telefono')
{{$tienda->telefono}}
@endsection
@section('horario')
{{$tienda->horario_atencion}}
@endsection



@section('content')
<body>
    <br>
    <br>
    <br>
    <br>

    <div class="container">
        <div class="form-row align-items-center">
            <h2>Pedidos recientes</h2>
            <select id="editPaymethod" name="tipo" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                <option  value="ninguno">Ninguno</option>
            @foreach ($ventas as $venta)
                <option  value="{{ $venta['id'] }}">{{ 'pedido#'.$venta['id']}}</option>
              @endforeach
            </select>
        </div>
        <input type="button" id="btnSubmitPaymethod" class="btn-warning" value="Ver pedido">
    </div>
    <div class="container" id="pedido_content">
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <script>
        $('#btnSubmitPaymethod').click(function(e){
            e.preventDefault()
            var parametros={
                "id": $('#editPaymethod').val(),
                "_token":'{{csrf_token()}}'
            };
            $.ajax({
                data: parametros,
                url: '{{route('paymethod.edit')}}',
                type: 'post',
                
                success: function(data){
                    $('#paymethod_content').html(data);
                }
            });
        });
    </script>
    @include('layouts.footer')
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
@endsection