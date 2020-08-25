@extends('layouts.header')

@section('title','Informacion')

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
    <br>
    <br>
    <br>
    <div class="container">
    <div id="myMap" style="height: 300px; width 80%;"></div>
    <input type="text" name="lat" id="lat" hidden>
    <input type="text" name="lng" id="lng" hidden>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col">
                <a>
                    <img src="https://image.flaticon.com/icons/svg/93/93381.svg" width="30"  height="30"  alt="">
                    <p class="font-weight-bold"> Coste de envio</p>  
                </a>
                <hr>
            </div>
            <div class="col">
                <a>
                    <img src="https://image.flaticon.com/icons/svg/223/223404.svg" width="30"  height="30"  alt="">
                    <p class="font-weight-bold"> Horario de atencion</p>  
                </a>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col">
                Minimo 10 Bs.,Costo 1 Bs. c/ 100mts.
            </div>
            <div class="col">
                Lunes a Domingo 8:00 a 20:00
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <img src="https://image.flaticon.com/icons/svg/93/93381.svg" width="30"  height="30"  alt="">
                    <p class="font-weight-bold"> Entrega a domicilio </p>  
                    <hr>
            </div>
            <div class="col">
                <a>
                    <img src="https://image.flaticon.com/icons/svg/49/49893.svg" width="30"  height="30"  alt="">
                    <p class="font-weight-bold"> Recogida en el local</p>  
                    <hr>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                Igual que el horario de atencion
            </div>
            <div class="col">
                Igual que el horario de atencion
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <img src="https://image.flaticon.com/icons/svg/535/535188.svg" width="30"  height="30"  alt="">
                    <p class="font-weight-bold"> Ubicacion </p>  
                    <hr>
            </div>
            <div class="col">
                <a>
                    <img src="https://image.flaticon.com/icons/svg/535/535256.svg" width="30"  height="30"  alt="">
                    <p class="font-weight-bold"> Metodos de pago</p>  
                    <hr>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                Av siempre viva 210
            </div>
            <div class="col">
                Efectivo, por tarjeta
            </div>
        </div>
        <br>

    </div>
    <br>

    @include('layouts.footer')


    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
    integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
    crossorigin=""/>


<script>
     $(document).ready(function(){
            if (document.getElementById('myMap')){
                var tilesProvider='https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
                
                let myMap = L.map('myMap').setView([-17.78368558052463, -63.18273568156657], 13);
                L.tileLayer(tilesProvider,{
                    maxZoom: 18,
                }).addTo(myMap);

                let marker=L.marker([-17.78368558052463, -63.18273568156657]).addTo(myMap);

                let circle = L.circle([-17.78368558052463, -63.18273568156657], {
                    color: 'red',
                    fillColor: '#f03',
                    fillOpacity: 0.5,
                    radius: 800
                }).addTo(myMap);

                navigator.geolocation.getCurrentPosition(
                    (pos)=>{
                        const { coords } = pos
                        myMap.remove();
                        myMap =L.map('myMap').setView([coords.latitude,coords.longitude], 13);
                        marker.removeFrom(myMap);
                        marker=L.marker([coords.latitude,coords.longitude]).addTo(myMap);
                        L.tileLayer(tilesProvider,{
                            maxZoom: 18,
                        }).addTo(myMap);

                        let circle = L.circle([-17.78368558052463,-63.18273568156657], {
                            color: 'red',
                            fillColor: '#f03',
                            fillOpacity: 0.5,
                            radius: 800
                        }).addTo(myMap);
                        myMap.on('click', onMapClick);
                    },
                    (err)=>{

                    },{
                        enableHighAccuracy: true,
                        timeout: 5000,
                        maximumAge:0
                    }
                );


                function onMapClick(e) {
                    marker.removeFrom(myMap);
                    marker=L.marker([e.latlng.lat,e.latlng.lng]).addTo(myMap);
                    document.getElementById('lat').value=e.latlng.lat;
                    document.getElementById('lng').value=e.latlng.lng;
                }
                myMap.on('click', onMapClick);

            }
        });
</script>

</body>
@endsection