<div class="card card-secondary">

    <br>
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
                                <p class="text-center font-weight-bold">Perfil usuario</p>
                            </div>
                            <div class="col">
                               
                            </div>
                            
                        </div>
                        <div id="user_content" class="border-bottom">
                            <p>{{ $cliente->nombre }}</p>
                            <p>{{ $cliente->email }}</p>
                            <p>{{ $cliente->telefono }}</p>
                        </div>
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
                               
                            </div>
                        </div>
                        <div id="type_content" class="border-bottom">
                            @if ($venta->es_delivery)
                                <p>Delivery</p>    
                                <p>{{$venta->ubicacion}}</p>
                            @else
                                <p>Lo recogere en el local</p>
                            @endif
                        </div>

                        <div class="row">
                            <div class="col">
                                <svg width="50%" height="50%" viewBox="0 0 16 16" class="bi bi-clock" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z"/>
                                    <path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                            </div>
                            <div class="col">
                                <p class="text-center font-weight-bold">Hora de pedido</p>
                            </div>
                            <div class="col">
                                
                            </div>
                        </div>
                        <div class="border-bottom">
                            @php
                             echo date_format($venta->created_at, 'd-m-Y H:i');   
                            @endphp 
                            </div>
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
                                
                            </div>
                        </div>
                        <div id="paymethod_content"></div>
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
                                            </p>

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
                               
                                <div class="row">
                                    <div class="col">
                                        <p class="text-left">{{ $extra['nombre_extra'].' x'.$extra['cantidad'] }}</p>
                                    </div>
                                    <div class="col">
                                    
                                    </div>
                                    <div class="col">
                                        <p class="text-left">{{ $extra['total'].' Bs.' }}</p>

                                    </div>
                                </div>
                               
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
                                    <p class="text-left font-weight-bold">{{ $venta['total'].' Bs.' }}</p>
                                </div>
                    </div>
                </div>
            </div>
            <br>
            <p class="text-left font-weight-bold">Comentarios pedido</p>
            <div class="form-group">
                <p>{{$venta->comentario}}</p>
            </div>
        </div>
        <nav class="navbar-expand-lg navbar-light bg-light">
            <center>
                <ul class="nav navbar-nav navbar-logo mx-auto">
                    @if (($venta->aceptado==false) && ($venta->rechazado==false))
                        <p class="font-weight-bold">El pedido # {{$venta->id}} aun no ha sido recepcionado.</p>
                    @endif
                    @if (($venta->entregado==false) &&($venta->aceptado==true))
                        <p class="font-weight-bold">El pedido # {{$venta->id}} esta siendo preparado y enviado.</p>
                    @endif
                    @if ($venta->entregado==true)
                        <p class="font-weight-bold">El pedido # {{$venta->id}} ha sido entregado.</p>
                    @endif
                    @if ($venta->rechazado==true)
                    <div class="container">
                        <div class="row">
                            <div class="col">
                            <p class="font-weight-bold">El pedido # {{$venta->id}} ha sido rechazado.</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                            <p class="font-weight-bold">Motivo rechazo:</p><p> {{$venta->comentario_respuesta}}</p>
                            </div>
                        </div>
                    </div>
                    @endif
                </ul>
            </center>
        </nav>
</div>
</body>