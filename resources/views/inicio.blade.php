<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Roimer - Portafolio</title>
        <link rel="icon" type="image/svg+xml" href="{{ Vite::asset('resources/images/logo-vt.png') }}">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body class="antialiased">
        <header>
            <nav>
                {{-- <div class="logo"></div> --}}
                <div class="header__logo">
                    <img  src="{{ Vite::asset('resources/images/logo-vt.svg') }}" alt="{{ __('Logo of Roimer\'s portfolio') }}">
                    <span>{{ __('Portfolio') }}</span>   
                </div>   
                <ul>
                    <li><a href="#">{{ __('About me') }}</a></li>
                    <li><a href="#">{{ __('Projects') }}</a></li>
                    <li><a href="#">{{ __('Skills') }}</a></li>
                    <li><a href="#">{{ __('Contact me') }}</a></li>
                </ul>

                <button class="header__menu-toggle-btn">
                    <i class="fa-solid fa-bars"></i>
                </button>

            </nav>

            <menu class="header__drop-down">
                <li><a href="#">{{ __('About me') }}</a></li>
                <li><a href="#">{{ __('Projects') }}</a></li>
                <li><a href="#">{{ __('Skills') }}</a></li>
                <li><a href="#">{{ __('Contact me') }}</a></li>
            </menu>

        </header>
        <main>
             
            <section class="seccion__about-me"> 
                <div class="seccion__contenedor">
                    <img class="seccion__foto-perfil" src="{{ Vite::asset('resources/images/roimer-garcia.jpg') }}" loading="lazy" alt="Roimer García">
                    <div>
                        <h2>Roimer García<br>
                            <small>Desarrollador web</small>
                        </h2>    
                        <div>
                            <a href="">Github</a>
                            <a href="">LinkedIn</a>
                            <a href="https://twitter.com/roimergarcia">Twitter</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="seccion seccion__projects"> 

            </section>

            
        </main>
        <footer>
            <div class="footer__contenedor">
                <img src="{{ Vite::asset('resources/images/logo-vt.svg') }}" loading="lazy"  >
                <div class="footer__grupo-link">
                    <label>{{ __('Email me at:')}}</label>
                    <a href="mail:roimer@variabletecnica.com">roimer@variabletecnica.com</a>
                </div>
                <div class="footer__grupo-link">
                    <label>{{ __('Visit my programming blog:')}}</label> 
                    <a href="https://variabletecnica.com" target="__blank">variabletecnica.com</a>
                </div>
                    
            </div>
            <div>
                <label>Atribuciones</label>
                Blue background: <a href="https://www.freepik.com/free-vector/flat-polygonal-background_13398920.htm#query=website%20background&position=14&from_view=search&track=ais">Freepik</a>
                White background: <a href="https://www.freepik.com/free-vector/abstract-white-shapes-background_12628435.htm#query=website%20background&position=48&from_view=keyword&track=ais">Image by coolvector</a> on Freepik
            </div>
        </footer>

    </body>
</html>