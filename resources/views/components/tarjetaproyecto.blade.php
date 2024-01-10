@props(['proyecto' => []])
<div class="proyectos__tarjeta">
    <img    class="proyectos__imagen-tarjeta" 
            {{-- src="{{$proyecto['urlImagen']}}"  --}}
            src="https://dummyimage.com/350x200/ae98ff/140821&text={{$proyecto['nombre']}}" 
            alt="{{$proyecto['nombre']}}">

    <h3 class="proyectos__nombre-tarjeta" >{{$proyecto['nombre']}}</h3> 

    <div class="proyectos__descripcion-tarjeta" >{{$proyecto['descripcion']}}</div> 

    <div class="proyectos__tecnologias-tarjeta" >
        <span>Tecnologías: </span>
        @foreach ($proyecto['tecnologias'] as $tech)
            <div class="proyectos__tech-tarjeta">
                @isset(PORTAFOLIO::ICONOS_TECNOLOGIA[Str::lower($tech)])
                    {!! PORTAFOLIO::ICONOS_TECNOLOGIA[Str::lower($tech)] !!}
                @endisset
                {{$tech}}
            </div>
        @endforeach

        
    </div> 

    <div class="proyectos__contenedor-urls-tarjeta" > 
        @isset($proyecto['urlCodigo'])
        <a class="proyectos__url-codigo-tarjeta" href="{{$proyecto['urlCodigo']}}">Ver Código...</a>
        @endisset
        
        @isset($proyecto['urlProduccion'])
        <a class="proyectos__url-produccion-tarjeta" href="{{$proyecto['urlProduccion']}}">Probar...</a>
        @endisset
    </div>

</div>