<section class="seccion__about-me"> 
    <div class="seccion__contenedor">
        <img class="seccion__foto-perfil" src="{{ Vite::asset('resources/images/roimer-garcia.jpg') }}" loading="lazy" alt="Roimer García">
        <div style="display: flex; gap:0.5em; flex-direction: column;">
            <h2 class="about-me__title">Roimer García</h2>    
            <div class="about-me__subtitle">{{__("Senior Web Developer")}}</div>
            <div class="seccion__about-me__social-container">
                <a href="https://github.com/roimergarcia"><i class="fa-brands fa-github"></i>Github</a>
                <a href="https://www.linkedin.com/in/roimergarcia"><i class="fa-brands fa-linkedin"></i>LinkedIn</a>
                <a href="https://twitter.com/roimergarcia"><i class="fa-brands fa-square-x-twitter"></i>Twitter</a>
            </div>
            <div>
                <span>{{__('Email to me at:')}}</span>
                <a href="mailto:{{Portafolio::CONTACT_EMAIL}}"><i class="fa-clear fa-email"></i>{{Portafolio::CONTACT_EMAIL}}</a>
                <x-botoncopiar textoACopiar='{{Portafolio::CONTACT_EMAIL}}' />
            </div>
        </div>
    </div>
</section>