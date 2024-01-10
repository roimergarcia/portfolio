@props(['proyecto' => []])
<div class="proyectos__tarjeta">
    <img    class="proyectos__imagen-tarjeta" 
            src="{{$proyecto['urlImagen']}}" 
            alt="{{$proyecto['nombre']}}">

    <h3>{{$proyecto['nombre']}}</h3> 

    <div>{{$proyecto['descripcion']}}</div> 

    <div>Tecnologías: {{$proyecto['tecnologias'][0]}}</div> 

    @isset($proyecto['urlCodigo'])
    <div><a href="{{$proyecto['urlCodigo']}}">Ver Código...</a></div>
    @endisset
    
    @isset($proyecto['urlProduccion'])
    <div><a href="{{$proyecto['urlProduccion']}}">Probar...</a></div>
    @endisset
        
</div>