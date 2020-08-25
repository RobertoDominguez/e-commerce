@extends('admin.layouts.header')

@section('content')

<div class="card-header">
    <h3 class="card-title">Estadisticas</h3>
    </div>
    <br>
    <div class="row">

        <div class="col-xl-1 col-md-6 mb-4">
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Producto mas vendido</div>
                  @if (!is_null($producto_mas_vendido))
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{$producto_mas_vendido->nombre}}</div>
                  @else
                  <div class="h5 mb-0 font-weight-bold text-gray-800">Ninguno</div>
                  @endif
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
                  <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Extra mas vendido</div>
                          @if (!is_null($extra_mas_vendido))
                          <div class="h5 mb-0 font-weight-bold text-gray-800">{{$extra_mas_vendido->nombre}}</div>
                          @else
                          <div class="h5 mb-0 font-weight-bold text-gray-800">Ninguno</div>
                          @endif
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

               
@endsection