<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Roimer - Portafolio</title>
        <link rel="icon" type="image/svg" href="{{ Vite::asset('resources/images/logo-vt.svg') }}">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body class="antialiased">
        <header>
            <nav>
                <menu>
                    <li><a href="#">{{ __('About me') }}</a></li>
                    <li><a href="#">{{ __('Projects') }}</a></li>
                    <li><a href="#">{{ __('Skills') }}</a></li>
                    <li><a href="#">{{ __('Contact me') }}</a></li>
                </menu>
            </nav>
        </header>
        <main>
            content<br>
            content<br>
            content<br>
            content<br>
            content<br>
            content<br>
            content<br>
            content<br>
            content<br>
            content<br>
            content<br>
            content<br>
            content<br>
            content<br>
            content<br>
            content<br>
            content<br>
            content<br>
            content<br>
            content<br>
            content<br>
            content<br>
            content<br>
            content<br>
            content<br>
            content<br>
            content<br>
            content<br>
            content<br>
            content<br>
        </main>
        <footer>
            <div class="footer__contenedor">
                <img src="{{ Vite::asset('resources/images/logo-vt.svg') }}" loading="lazy"  >
                <div class="footer__grupo-link">
                    <label>{{ __('Email me at:')}}</label>
                    <a href="mail:roimer@variabletecnica.com">contact@email.com</a>
                </div>
                <div class="footer__grupo-link">
                    <label>{{ __('Visit my programming blog:')}}</label> 
                    <a href="https://variabletecnica.com" target="__blank">variabletecnica.com</a>
                </div>
                    
            </div>
        </footer>

    </body>
</html>