<footer>
    <div class="footer__contenedor">
        <img class="footer__logo" src="{{ Vite::asset('resources/images/logo-vt.svg') }}" loading="lazy"  >
        <div class="footer__grupo-link">
            <label>{{ __('Email to me at:')}}</label>
            <div>
                <a href="mailto:{{Portafolio::CONTACT_EMAIL}}"><i class="fa-clear fa-email"></i>{{Portafolio::CONTACT_EMAIL}}</a>
                <x-botoncopiar textoACopiar='{{Portafolio::CONTACT_EMAIL}}' />
            </div>
        </div>
        <div class="footer__grupo-link">
            <label>{{ __('Visit my programming blog:')}}</label> 
            <a href="{{Portafolio::PERSONAL_BLOG_URL}}" target="__blank">{{Portafolio::PERSONAL_BLOG}}</a>
        </div>
            
    </div>
    <div>
        <label>Atribuciones</label>
        Blue background: <a href="https://www.freepik.com/free-vector/flat-polygonal-background_13398920.htm#query=website%20background&position=14&from_view=search&track=ais">Freepik</a>
        White background: <a href="https://www.freepik.com/free-vector/abstract-white-shapes-background_12628435.htm#query=website%20background&position=48&from_view=keyword&track=ais">Image by coolvector</a> on Freepik
    </div>
</footer>