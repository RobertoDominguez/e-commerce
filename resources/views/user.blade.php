<body>
    @if (!is_null($usuario))
        {{$usuario['nombre']}}
        <br>
        {{$usuario['email']}}
        <br>
        {{$usuario['telefono']}}
    @endif
</body>
