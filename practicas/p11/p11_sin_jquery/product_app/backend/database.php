<?php
    $conexion = @mysqli_connect(
        'localhost',
        'root',
        'GASCAE10M98',
        'marketzone'
    );

    /**
     * NOTA: si la conexión falló $conexion contendrá false
     **/
    if(!$conexion) {
        die('¡Base de datos NO conextada!');
    }
?>