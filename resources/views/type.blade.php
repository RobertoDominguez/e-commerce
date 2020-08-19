<body>

    <div class="border-bottom">
    @if (!is_null($tipo))
        @if ($tipo=='local')
            <p> Lo recogere en el local.</p>
        @else
            <p> Envio por delivery.</p>
            @if (!is_null($ubicacion))    
            <p>Ubicacion: {{$ubicacion['ubicacion'] }}
            @endif
        @endif
    @endif
    </div>
</body>