@extends('layouts.header')

@section('title','Menu')

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
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: 50px;">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active ">
            <img class="d-block w-100 img-responsive" src="1.jpg" srcset="1.jpg 1x, 1.jpg 2x" alt="">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-responsive" src="2.jpg" srcset="2.jpg 1x, 2.jpg 2x" alt="">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-responsive" src="3.jpg" srcset="3.jpg 1x, 3.jpg 2x" alt="">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      

        <center>
        <div class="container">
                @php
                 $anterior_categoria="";
                 $i=0;   
                @endphp
            @foreach ($productos as $producto)
            @if ($anterior_categoria!=$producto->nombre_categoria)
              <div class="row">
                <div class="col-12">
                    <h1 class="pb-2 mt-4 mb-2 border-bottom">{{$producto->nombre_categoria}}</h1>
                </div>
            @endif
                <div class="col-md-4 col-6">
        
                    <a href="{{route('get_producto',$producto->id)}}"><img style="border-radius: 5px;" class="img-fluid img-portfolio img-hover mb-3 img"
                        src="{{asset('/storage/'.$producto->imagen)}}" srcset="{{asset('/storage/'.$producto->imagen)}} 1x, {{asset('/storage/'.$producto->imagen)}} 2x" alt=""></a>
      
                    <div class="caption">
                          <a href="{{route('get_producto',$producto->id)}}" class="font-weight-bold" style="color: #ffa500;" >{{$producto->nombre_producto}}</a>
                        <div class="font-weight-bold">{{'Bs. '.$producto->precio}}</div>
                        <div class="font-weight-light">{{$producto->descripcion}}</div>
                        <p class="product-block-description d-none d-md-block"> </p>
                    </div>

                </div>
                @if ($i+1 < count($productos))
                    @if ($productos[$i+1]->nombre_categoria!=$producto->nombre_categoria) 
                        </div>
                    @endif
                @endif  
              @php
              $anterior_categoria=$producto->nombre_categoria;   
              $i++;
              @endphp
              @endforeach
        </div>
    </center>
    
    @include('layouts.footer')

    

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
@endsection



