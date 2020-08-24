
<div class="card card-secondary">

    <!-- /.card-header -->
    <!-- form start -->
    <div class="card-body">

        <div class="container">      


            <div class="card mb-4">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Pedidos en espera</div>
                
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered"  width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nro_venta</th>
                                    <th>Fecha</th>
                                    <th>Total</th>
                                    <th>Estado</th>
                                    <th></th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ventas as $venta)
                                @php 
                                    $time = date('H:i', strtotime($venta->created_at));
                                @endphp
                                <tr>
                                    <td>{{$venta->id}}</td>
                                    <td>{{$venta->created_at->format('d-m-Y').'-'.$time}}</td>
                                    <td>{{ $venta->total.' Bs.' }}</td>
                                    <td>
                                        @if (($venta->aceptado==false) && ($venta->rechazado==false) && ($venta->entregado==false))
                                        <p class="font-weight-bold">No Atendido!</p>  
                                        @else
                                            @if (($venta->aceptado==true) && ($venta->entregado==false))
                                                <p>En Camino</p>
                                            @endif
                                        @endif
                                    </td>
                                    <td>
                                    <a href="{{ route('admin.detalle_pedido',$venta->id) }}" class="btn btn-warning" >ver detalles</a>
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
</div>
