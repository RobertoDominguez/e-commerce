
<div class="card card-secondary">
    <div class="card-header">
    <h3 class="card-title">Pedidos</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="card-body">

        <div class="container">      


            <div class="card mb-4">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Pedidos</div>
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
                                    <td></td>
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



<!--

<div class="card mb-4">
        <div class="card-header"><i class="fas fa-table mr-1"></i>Pedidos</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>

    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
-->

