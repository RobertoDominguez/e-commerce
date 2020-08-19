@extends('layouts.header')

@section('title','Carrito')

@section('content')


<body>
    <style>
    .texto{
        font-size:2vw;
    }    
    </style>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        @if ($errors->any())
        <div class="alert alert-warning">
            <strong>Whoops!</strong> Verifica los datos.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    <div class="container border">
        <div class="row">
            <div class="col-md-6 col-12 border">
                    <div class="row">
                        <div class="col">
                            <svg width="50%" height="50%" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                        </div>
                        <div class="col">
                            <p class="text-center font-weight-bold">Mi perfil</p>
                        </div>
                        <div class="col">
                            <svg id="btnEditUser"  width="50%" height="50%" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                        </div>
                        
                    </div>
                    <div id="user_content" class="border-bottom"></div>
                    <div class="row">
                        <div class="col">
                            <svg width="50%" height="50%" viewBox="0 0 16 16" class="bi bi-card-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                <path fill-rule="evenodd" d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
                                <circle cx="3.5" cy="5.5" r=".5"/>
                                <circle cx="3.5" cy="8" r=".5"/>
                                <circle cx="3.5" cy="10.5" r=".5"/>
                            </svg>
                        </div>
                        <div class="col">
                            <p class="text-center font-weight-bold">Tipo de pedido</p>
                        </div>
                        <div class="col">
                            <svg id="btnEditType" width="50%" height="50%" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                        </div>
                    </div>
                    <div id="type_content" class="border-bottom"></div>

                    <div class="row">
                        <div class="col">
                            <svg width="50%" height="50%" viewBox="0 0 16 16" class="bi bi-clock" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z"/>
                                <path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                        </div>
                        <div class="col">
                            <p class="text-center font-weight-bold">Hora de entrega</p>
                        </div>
                        <div class="col">
                            
                        </div>
                    </div>
                    <div class="border-bottom">Lo antes posible.</div>
                    <div class="row">
                        <div class="col">
                            <svg width="50%" height="50%" viewBox="0 0 16 16" class="bi bi-cash-stack" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 3H1a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1h-1z"/>
                                <path fill-rule="evenodd" d="M15 5H1v8h14V5zM1 4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H1z"/>
                                <path d="M13 5a2 2 0 0 0 2 2V5h-2zM3 5a2 2 0 0 1-2 2V5h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 13a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
                              </svg>
                        </div>
                        <div class="col">
                            <p class="text-center font-weight-bold">Metodo de pago</p>
                        </div>
                        <div class="col">
                            <svg id="btnEditPaymethod" width="50%" height="50%" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                        </div>
                    </div>
                    <div id="paymethod_content" ></div>
            </div>
            <div class="col-md-6 col-12 border" id="cart_content" >
                <div class="row border" style="background-color: #cdcdcd;">
                    <div class="col">
                        <p class="text-left font-weight-bold">Cant. articulo</p>
                    </div>
                    <div class="col">
                    </div>
                    <div class="col">
                        <p class="text-left font-weight-bold">Precio</p>
                    </div>
                </div>
               
                <!-- inicio -->
                @php
                    $total_venta=0;
                @endphp
                @if (count($detalles)>0)
                    @php
                     $i=0;   
                    @endphp
                    @foreach ($detalles as $detalle)
                        <form action="{{route('cart.delete_item')}}" method="POST">
                            {{ csrf_field() }}
                            <input name="id_detalle" value="{{$i}}" hidden>
                            <div class="row">
                                <div class="col">
                                    <p class="text-left font-weight-bold">{{ $detalle['nombre_producto'].' x'.$detalle['cantidad'] }}</p>
                                </div>
                                <div class="col">
                                    <p class="font-weight-light">{{ $detalle['nombre_tamano'].'(+'.$detalle['costo_extra_tamano'].')' }}</p>
                                </div>
                                <div class="col">
                                        <p class="text-left">{{ $detalle['total'].' Bs.' }}
                                            <button type="submit" style="background: transparent; border: none !important;">    
                                                <svg  width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                    <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708-.708l7-7a.5.5 0 0 1 .708 0z"/>
                                                    <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 0 0 0 .708l7 7a.5.5 0 0 0 .708-.708l-7-7a.5.5 0 0 0-.708 0z"/>
                                                </svg>
                                            </button>
                                        </p>
                                    @php
                                    $total_venta+=$detalle['total'];   
                                    @endphp
                                </div>
                            </div>
                        </form>
                        @if (!is_null($detalle['instruccion_especial']))
                            <div class="row">
                                <div class="col">
                                    <p class="font-weight-light text-left">{{ $detalle['instruccion_especial'] }}</p>
                                </div>
                                <div class="col">
                                
                                </div>
                                <div class="col">
                                    
                                </div>
                            </div>
                        @endif
                        @foreach ($extras[$i] as $extra)
                            @if ($extra['id_extra']!=null)
                            <div class="row">
                                <div class="col">
                                    <p class="text-left">{{ $extra['nombre_extra'].' x'.$extra['cantidad'] }}</p>
                                </div>
                                <div class="col">
                                
                                </div>
                                <div class="col">
                                    <p class="text-left">{{ $extra['total'].' Bs.' }}</p>
                                    @php
                                        $total_venta+=$extra['total']; 
                                    @endphp
                                </div>
                            </div>
                            @endif
                        @endforeach
                        @php
                           $i++; 
                        @endphp
                    @endforeach
                @else
                    <p class="text-center font-weight-bold">Su pedido esta vacio</p>
                @endif
        
                <div class="row border">
                            <div class="col">
                                <p class="text-left font-weight-bold">Total</p>
                            </div>
                            <div class="col">
                                
                            </div>
                            <div class="col">
                                @if (count($detalles)==0)
                                <p class="text-left font-weight-bold">0 Bs.</p>
                                @else
                                <p class="text-left font-weight-bold">{{ $total_venta.' Bs.' }}</p>
                                @endif
                            </div>
                </div>
            </div>
        </div>
        <br>
        <form action="{{route('cart.buy')}}" method="POST">
            {{ csrf_field() }}
        <p class="text-left font-weight-bold">Comentarios (Opcional)</p>
        <div class="form-group">
            <textarea class="form-control" name="comentarios"  rows="3"></textarea>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <nav class="navbar fixed-bottom navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <ul class="nav navbar-nav navbar-logo mx-auto">
            <li class="nav-item">
              <a class="nav-link">
                <div class="container">
                        <input type="submit" class="btn btn-lg btn-block" style="background-color: #ffc300" value="{{$total_venta.'Bs.'.'|Finalizar el pedido!'}}">
                    </form>
                </div>
              </a>
            </li>
          </ul>
        </div>
    </nav>

    <script type="text/javascript">

            $.ajax({
                url: '{{route('user')}}',
                type: 'get',
                
                success: function(data){
                    $('#user_content').html(data);
                }
            });

            
            $.ajax({
                url: '{{route('type')}}',
                type: 'get',
                
                success: function(data){
                    $('#type_content').html(data);
                }
            });

            $.ajax({
                url: '{{route('paymethod')}}',
                type: 'get',
                
                success: function(data){
                    $('#paymethod_content').html(data);
                }
            });




        $('#btnEditUser').click(function(){
            $.ajax({
                url: '{{route('user.get_edit')}}',
                type: 'get',
                
                success: function(data){
                    $('#user_content').html(data);
                }
            });
        });

        $('#btnEditType').click(function(){
            $.ajax({
                url: '{{route('type.get_edit')}}',
                type: 'get',
                
                success: function(data){
                    $('#type_content').html(data);
                }
            });
        });

        $('#btnEditPaymethod').click(function(){
            $.ajax({
                url: '{{route('paymethod.get_edit')}}',
                type: 'get',
                
                success: function(data){
                    $('#paymethod_content').html(data);
                }
            });
        });

    </script>



</body>

@endsection