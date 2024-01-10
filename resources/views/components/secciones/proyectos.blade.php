<section class="seccion seccion__proyectos"> 

    <h2>Proyectos Resaltantes</h2>

    <div class="seccion__contenedor">  
    @php($proyectos = Portafolio::PROYECTOS)
    @foreach ( $proyectos as $proyecto)
        {{-- @dump($proyecto) --}}

        <x-tarjetaproyecto :proyecto='$proyecto'></x-tarjetaproyecto>
    @endforeach
</div>

</section>