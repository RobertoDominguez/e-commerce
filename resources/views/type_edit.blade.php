<header>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
    integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
    crossorigin=""/>
</header>

<body>



    <div class="form-row align-items-center">
          <select id="editType" name="tipo" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
            <option >Elegir...</option>
            <option  value="local">Lo recogere en el local.</option>
            <option  value="delivery">Envio por delivery.</option>
          </select>
    </div>

      
    @if (!is_null($tipo))
        @if ($tipo=='local')
            <p class="font-weight-bold"> Lo recogere en el local.</p>
            <input type="button" class="btn-warning" id="btnSubmitEditType1" value="aceptar" >
        @else    
            <p class="font-weight-bold"> Ubicacion.</p>
            @if (is_null($ubicacion))
                <input type="text" class="form-control" id="ubicacion" placeholder="Ubicacion..." required>
            @else
                <input type="text" class="form-control" value="{{$ubicacion['ubicacion']}}" id="ubicacion" placeholder="Ubicacion..." required>
            @endif
            <div id="myMap" style="height: 200px;"></div>
            <input type="button" class="btn-warning" id="btnSubmitEditType2" value="aceptar" >
            <input type="text" name="lat" id="lat" hidden>
            <input type="text" name="lng" id="lng" hidden>
        @endif
    @endif




    <script type="text/javascript">

        //mapa
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


        //cambiar tipo 
        $('#editType').change(function(e){
            e.preventDefault()
            var parametros={
                "tipo": $('#editType').val(),
                "_token":'{{csrf_token()}}'
            };
            $.ajax({
                data: parametros,
                url: '{{route('type.edit')}}',
                type: 'post',
                success: function(data){
                    $('#type_content').html(data);
                }
            });
        });

        //aceptar tipo1
        $('#btnSubmitEditType1').click(function(){
            $.ajax({
                url: '{{route('type')}}',
                type: 'get',
                success: function(data){
                    $('#type_content').html(data);
                }
            });
        });

        //aceptar tipo2
        $('#btnSubmitEditType2').click(function(e){
            e.preventDefault()
            var parametros={
                "ubicacion": $('#ubicacion').val(),
                "lat": $('#lat').val(),
                "long": $('#lng').val(),
                "costo_envio":10,
                "_token":'{{csrf_token()}}'
            };
            $.ajax({
                data: parametros,
                url: '{{route('ubicacion.edit')}}',
                type: 'post',
                success: function(data){
                    $('#type_content').html(data);
                },
                error: function(){
                    alert('Escriba y señale su ubicacion en el mapa, dentro de los limites de cobertura.')
                } 
            });
        });

    </script>

</body>