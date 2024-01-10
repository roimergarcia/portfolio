<?php
namespace App\Support;
readonly class Portafolio {
    const CONTACT_EMAIL = 'roimer@variabletecnica.com';
    const PERSONAL_BLOG = 'variabletecnica.com';
    const PERSONAL_BLOG_URL = 'https://variabletecnica.com';
    const PERSONAL_GITHUB = 'https://github.com/roimergarcia';
    const PERSONAL_LINKEDIN = 'https://www.linkedin.com/in/roimergarcia';


    const PROYECTOS = array(       
        array(        
            'nombre' => 'VtVue-UI',
            'descripcion' => 'Es una librería de controles web compuestos, instalable como un plugin de Vue.',
            'tecnologias' => ['Javascript', 'Vue'],
            'urlImagen' => '',
            'urlCodigo' => 'https://github.com/roimergarcia/vt-vue-ui',
            'urlProduccion'=>'https://demo.variabletecnica.com'
        ),        
        array(       
            'nombre' => 'Showmejson',
            'descripcion' => 'Es una pequeña utilidad para visualizar un objeto Javascript en un formato similar a JSON, usando html.',
            'tecnologias' => ['Javascript'],
            'urlImagen' => '',
            'urlCodigo' => 'https://github.com/roimergarcia/showmejson'
        ),        
        array(        
            'nombre' => '(ej) Descarga con Progreso',
            'descripcion' => 'Es un pequeño ejercicion para descarga de archivos con barra de progreso. ',
            'tecnologias' => ['Javascript', 'HTML', 'CSS'],
            'urlImagen' => '',
            'urlCodigo' => 'https://github.com/roimergarcia/showmejson'
        ),        
        array(         
            'nombre' => '(ej) Let\'s Ally',
            'descripcion' => '(paused) Top-Down 2D / Beat Them All, made with Godot, for Jump Ship Jam.',
            'tecnologias' => ['GDScript'],
            'urlImagen' => '',
            'urlCodigo' => 'https://github.com/roimergarcia/godot-let-s-ally'
         ) 
    );

    const ICONOS_TECNOLOGIA = array(
        'javascript' => '<i class="fa-brands fa-js"></i>',
        'html' => '<i class="fa-brands fa-html5"></i>',
        'css' => '<i class="fa-brands fa-css3"></i>',
        'vue' => '<i class="fa-brands fa-vuejs"></i>'
    );

}


// readonly class Proyecto{
//     public String $nombre;
//     public String $descripcion;
//     public String $tecnologias;
//     public String $urlImagen;
//     public String $urlCodigo;

//     public function __construct(string $nombre, string $descripcion, string $tecnologias, string $urlImagen, string $urlCodigo ){
//         $this->nombre       = $nombre ;
//         $this->descripcion  = $descripcion;
//         $this->tecnologias  = $tecnologias;
//         $this->urlImagen    = $urlImagen ;
//         $this->urlCodigo    = $urlCodigo;

//     }
// }
