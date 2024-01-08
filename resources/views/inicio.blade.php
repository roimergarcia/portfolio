<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Roimer - Portafolio</title>
        <link rel="icon" type="image/png" href="{{ Vite::asset('resources/images/logo-vt.png') }}">
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

        <x-cabecera />

        <main>

             <x-secciones.acercademi />

             <x-secciones.proyectos />

             <x-secciones.habilidades />

             <x-secciones.experiencia />
             
             <x-secciones.contacto />

        </main>

        <x-piedepagina />

    </body>
</html>