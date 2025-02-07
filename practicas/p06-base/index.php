<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 6</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Escribir programa para comprobar si un número es un múltiplo de 5 y 7</p>
    <?php


        require_once __DIR__.'/src/funciones.php';

    if(isset($_GET['numero']))
    {
        es_multiplo7y5($_GET['numero']);
    }
    ?>

    <h2>Ejercicio 2</h2>
    <p>Crea un programa para la generación repetitiva de 3 números aleatorios hasta obtener una
    secuencia compuesta por: impar par impar</p>

    <p>Estos números deben almacenarse en una matriz de Mx3, donde M es el número de filas y 3 el número de columnas. Al final muestra el número de iteraciones y la cantidad de números generados:</p>

    <p>12 números obtenidos en 4 iteraciones</p>

    
    <?php

        require_once __DIR__.'/src/funciones.php';

        generarMatrizAleatoria();
    ?>


    <h2>Ejercicio 3</h2>
    <p>Utiliza un ciclo while para encontrar el primer número entero obtenido aleatoriamente, que sea múltiplo de un número dado.</p>
    <p>Además, crea una variante usando el ciclo do-while.</p>



    <?php
    require_once __DIR__.'/src/funciones.php';

    if (isset($_GET['multiplo'])) {
        $multiplo = intval($_GET['multiplo']);
        if ($multiplo > 0) {
            encontrarMultiploWhile($multiplo);
            encontrarMultiploDoWhile($multiplo);
        } else {
            echo "<p>Por favor introduce un número mayor a 0.</p>";
        }
    }
    ?>


    <h2>Ejercicio 4</h2>
    <p>Crea un arreglo cuyos índices van de 97 a 122 y cuyos valores son las letras de la 'a' a la 'z'.</p>
    <p>El arreglo se mostrará en una tabla con sus índices y valores correspondientes.</p>

    <?php
    require_once __DIR__.'/src/funciones.php';


    crearArregloAscii();
    ?>

    <h2>Ejercicio 5</h2>
    <p>Identificar si una persona de sexo femenino está en el rango de edad permitido (18 a 35 años).</p>

    <form action="" method="post">
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required><br><br>

        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" required>
            <option value="femenino">Femenino</option>
            <option value="masculino">Masculino</option>
        </select><br><br>

        <input type="submit" value="Enviar">
    </form>

    <?php
    require_once __DIR__.'/src/funciones.php';


    if (isset($_POST['edad']) && isset($_POST['sexo'])) {
        $edad = $_POST['edad'];
        $sexo = $_POST['sexo'];

  
        verificarEdadSexo($edad, $sexo);
    }
    ?>



    <h2>Ejercicio 6</h2>
    <p>Consulta de información del parque vehicular.</p>


    <form action="" method="get">
        <label for="matricula">Buscar por matrícula:</label>
        <input type="text" id="matricula" name="matricula" placeholder="Ej. ABC1234">
        <input type="submit" value="Buscar">
    </form>

    <form action="" method="get">
        <input type="hidden" name="mostrar_todos" value="1">
        <input type="submit" value="Mostrar todos los autos">
    </form>

    <?php
    require_once __DIR__.'/src/funciones.php';

    if (isset($_GET['matricula'])) {
        $matricula = strtoupper(trim($_GET['matricula']));
        mostrarAutoPorMatricula($matricula);
    }

    if (isset($_GET['mostrar_todos'])) {
        mostrarTodosLosAutos();
    }
    ?>



    <h2>Ejemplo de POST</h2>
    <form action="http://localhost/tecweb/practicas/p06-base/index.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
    <br>
    <?php
        if(isset($_POST["name"]) && isset($_POST["email"]))
        {
            echo $_POST["name"];
            echo '<br>';
            echo $_POST["email"];
        }
    ?>
</body>
</html>