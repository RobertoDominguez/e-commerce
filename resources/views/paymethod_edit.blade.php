<body>

    <div class="form-row align-items-center">
        <select id="editPaymethod" name="tipo" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
          @foreach ($metodos as $metodo)
            <option  value="{{$metodo->id}}">{{$metodo->nombre}}</option>
          @endforeach
        </select>
    </div>
    <input type="button" id="btnSubmitPaymethod" class="btn-warning" value="Aceptar">


    <script>
        $('#btnSubmitPaymethod').click(function(e){
            e.preventDefault()
            var parametros={
                "id": $('#editPaymethod').val(),
                "_token":'{{csrf_token()}}'
            };
            $.ajax({
                data: parametros,
                url: '{{route('paymethod.edit')}}',
                type: 'post',
                
                success: function(data){
                    $('#paymethod_content').html(data);
                }
            });
        });
    </script>
</body>