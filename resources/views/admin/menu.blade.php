@extends ('admin.layouts.header')

@section('content')
<body>

        <div class="card-header">
        <h3 class="card-title">Pedidos</h3>
        </div>
    
        <div class="row">

            <div class="col-xl-1 col-md-6 mb-4">
            </div>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Ganancias (Mensual)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">${{$ganancia_mensual}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Ganancias (Anual)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">${{$ganancia_anual}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pedidos pendientes</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$pedidos_pendientes}}</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        </div>





    <div id="pedidos_content">

    </div>

    <script type="text/javascript">
     $(document).ready(function(){
        $.ajax({
                url: '{{route('admin.pedidos')}}',
                type: 'get',
                
                success: function(data){
                    $('#pedidos_content').html(data);
                }
        });
         
            setInterval(function(){
                $.ajax({
                url: '{{route('admin.pedidos')}}',
                type: 'get',
                
                success: function(data){
                    $('#pedidos_content').html(data);
                }
                });
            },10000);
     });
    </script> 
</body>
@endsection