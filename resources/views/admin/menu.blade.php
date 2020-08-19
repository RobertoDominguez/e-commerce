@extends ('admin.layouts.header')

@section('content')
<body>

    <div id="pedidos_content">

    </div>

    <script type="text/javascript">
     $(document).ready(function(){
        $.ajax({
                url: '{{route('admin.pedidos')}}',
                type: 'get',
                
                success: function(data){
                    $('#pedidos_content').html(data);
                }
        });
         
            setInterval(function(){
                $.ajax({
                url: '{{route('admin.pedidos')}}',
                type: 'get',
                
                success: function(data){
                    $('#pedidos_content').html(data);
                }
                });
            },10000);
     });
    </script> 
</body>
@endsection