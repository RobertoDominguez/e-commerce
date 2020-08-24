@extends('admin.layouts.header')

@section('content')

<div class="card-header">
    <h3 class="card-title">Estadisticas</h3>
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
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Producto mas vendido</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{$producto_mas_vendido->nombre}}</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

@endsection