@extends('admin.layouts.header')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
</head>
<body>
    
    <div class="row">
        <div class="col-12">
            <div class="card card-secondary">
                <div class="card-header">
                <h3 class="card-title">Ventas</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                            <th>Nro Pedido</th>
                            <th>Fecha</th>
                            <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($ventas as $venta)
                                <tr>
                                    <td>{{ $venta->id }} </td>
                                    <td>{{ $venta->created_at }}</td>
                                    <td>{{ $venta->total.' Bs.' }}</td>
                                </tr>
                                @endforeach
                        </tbody>
                        </table>
                </div>

            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#example1').DataTable( {
                "responsive": true,
                "autoWidth": false,
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            } );
        } );
    </script>
</body>
</html>
@endsection

