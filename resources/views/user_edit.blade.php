<body>


    <div class="container">

        @if (!is_null($usuario))
            Nombre
            <input class="form-control" value="{{$usuario['nombre']}}" name="nombre" id="nombre" type="text" required>
            <br>
            Correo
            <input class="form-control" value="{{$usuario['email']}}" name="email" id="email" type="text" required>
            <br>
            Telefono
            <input class="form-control" value="{{$usuario['telefono']}}" name="telefono" id="telefono" type="text" required>
        @else
            Nombre
            <input class="form-control" name="nombre" id="nombre" type="text" required>
            <br>
            Correo
            <input class="form-control" name="email" id="email" type="text" required>
            <br>
            Telefono
            <input class="form-control" name="telefono" id="telefono" type="text" required>
        @endif
        <br>
        <input type="button" class="btn-warning" id="btnSubmitEditUser" value="aceptar" >
    </div>



    <script type="text/javascript">
        $('#btnSubmitEditUser').click(function(e){
            e.preventDefault()
            var parametros={
                "nombre": $('#nombre').val(),
                "email":$('#email').val(),
                "telefono":$('#telefono').val(),
                "_token":'{{csrf_token()}}'
            };
            $.ajax({
                data: parametros,
                url: '{{route('user.edit')}}',
                type: 'post',
                success: function(data){
                    $('#user_content').html(data);
                },
                error: function(){
                    alert('Rellene los campos con la informacion adecuada.')
                } 
            });
        });
    </script>

</body>