@extends('layouts.header')

@section('content')
<body style="background-color: hsl(0, 0%, 97%)"> 
  <br>
  <br>
    <div class="container" style="margin-top: 60px;">
      <a class="nav-item nav-link" href="/">
        <img src="https://image.flaticon.com/icons/svg/467/467272.svg" width="50"  height="50"  alt="">
      </a>
    <form action="{{route('add_detalle',$producto->id)}}" method="post">
        {{ csrf_field() }}
        <h1 class="text-center font-weight-bold">{{$producto->nombre}}</h1>
        <hr> 
        <p class="text-center font-weight-bold">{{$producto->precio.'Bs.'}}</p>
        <p class="text-justify text-center">{{ $producto->descripcion }}</p>
        <hr>
        @php
         $i=0;   
        @endphp
        @foreach ($tamanos as $tamano)
        <div class="container">
          <center>
            @if ($i==0)
              <div class="form-check">
                <input class="form-check-input" type="radio" name="id_tamano" id="{{'exampleRadios'.$tamano->id}}" value="{{$tamano->id}}" checked>
                <label class="form-check-label" for="{{'exampleRadios'.$tamano->id}}">
                  {{$tamano->nombre.' (+'.$tamano->precio_extra.' Bs.)'}}
                </label>
              </div>  
            @else
              <div class="form-check">
                <input class="form-check-input" type="radio" name="id_tamano" id="{{'exampleRadios'.$tamano->id}}" value="{{$tamano->id}}">
                <label class="form-check-label" for="{{'exampleRadios'.$tamano->id}}">
                  {{$tamano->nombre.' (+'.$tamano->precio_extra.' Bs.)'}}
                </label>
              </div>
            @endif
          </div>
        </center>
          @php
          $i++;   
          @endphp
        @endforeach
        <hr> 
        @foreach ($categorias_extras as $cat_ext)
            <center>
            <a class="text-center font-weight-bold">{{$cat_ext->nombre}}</a>
            </center>
            <br>
            @foreach ($extras as $extra)
              <div class="row">
                @if ($extra->id_categoria == $cat_ext->id) 
                  <div class="col-8">  
                    <div class="form-check form-check-inline" style="margin-bottom: 1%">
                      <input class="form-check-input" name="extras[]" type="checkbox" id="{{'inlineCheckBox'.$extra->id_extra}}" value="{{$extra->id_extra}}">
                      <label class="form-check-label" for="{{'inlineCheckBox'.$extra->id_extra}}">{{$extra->nombre.' (+'.$extra->precio.'Bs.)' }}</label>
                    </div>
                  </div>
                  <div class="col-2">
                    <input type="number" id="{{ 'input'.$extra->id_extra }}" name="cantidad{{$extra->id_extra}}" value="1" min="1" max="50">
                  </div>
                  <br>
                @endif
              </div>
            @endforeach
        @endforeach
        <hr> 
        <center>
          <a class="text-center font-weight-bold">Cantidad</a> 
        <input type="number" name="cantidad" value="1" min="1" max="50">
        <br> 
        <hr> 
        <a class="text-center font-weight-bold">Instruccion extra</a> 
        <textarea name="instruccion_especial" class="form-control" placeholder="Aqui van las instrucciones extra..." rows="2"></textarea>
        <br>
        <hr>
          <input type="submit" class="nav-link" style="background-color: #ffc300" value="Añadir al carrito">
        </center>

    </form>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>



  <script>

  </script>

</body>
@endsection

<!--
               <div class="texto">
                  <label id="num[]">1</label>
                </div>
                <div class="group-buttons">
                  <a class="btn btn-primary" id="incrementa" href="#">+</a>
                  <a class="btn btn-primary" id="disminuye" href="#">-</a>
                </div>
-->