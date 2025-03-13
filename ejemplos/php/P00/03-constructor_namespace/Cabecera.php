<?php
namespace EJEMPLOS\POO;

class Cabecera {
    private $titulo;
    private $ubicacion;

    public function __construct($title, $location) {
        $this->titulo = $title;
        $this->ubicacion = $location;
    }

    public function graficar() {
        $estilo = 'font-size: 40px; text-align: '.$this->ubicacion.';'; // Corregido "fint-size"
        echo '<div style="'.$estilo.'">'; // Eliminado el carácter extra '"'
        echo '<h4>'.$this->titulo.'</h4>';
        echo '</div>';
    }
}

class Cabecera2 {
    private $titulo;
    private $ubicacion;
    private $enlace; // Se agregó la propiedad $enlace

    public function __construct($title, $location, $link) {
        $this->titulo = $title;
        $this->ubicacion = $location;
        $this->enlace = $link; // Corregido $this -> enlace a $this->enlace
    }

    public function graficar() {
        $estilo = 'font-size: 40px; text-align: '.$this->ubicacion.';'; // Corregido "fint-size"
        echo '<div style="'.$estilo.'">'; // Eliminado el carácter extra '"'
        echo '<h4>';
        echo '<a href="'.$this->enlace.'">'.$this->titulo.'</a>'; // Corregido <ha> a <a>
        echo '</h4>';
        echo '</div>';
    }
}