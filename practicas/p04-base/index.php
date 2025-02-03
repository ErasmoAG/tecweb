<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Práctica 3</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Determina cuál de las siguientes variables son válidas y explica por qué:</p>
    <p>$_myvar,  $_7var,  myvar,  $myvar,  $var7,  $_element1, $house*5</p>
    <?php
        //AQUI VA MI CÓDIGO PHP
        $_myvar;
        $_7var;
        //myvar;       // Inválida
        $myvar;
        $var7;
        $_element1;
        //$house*5;     // Invalida
        
        echo '<h4>Respuesta:</h4>';   
    
        echo '<ul>';
        echo '<li>$_myvar es válida porque inicia con guión bajo.</li>';
        echo '<li>$_7var es válida porque inicia con guión bajo.</li>';
        echo '<li>myvar es inválida porque no tiene el signo de dolar ($).</li>';
        echo '<li>$myvar es válida porque inicia con una letra.</li>';
        echo '<li>$var7 es válida porque inicia con una letra.</li>';
        echo '<li>$_element1 es válida porque inicia con guión bajo.</li>';
        echo '<li>$house*5 es inválida porque el símbolo * no está permitido.</li>';
        echo '</ul>';
    ?>

    <h2>Ejercicio 2</h2>
    <p>Proporcionar los valores de $a, $b, $c como sigue:</p>
    <ul>
    <li>$a = “ManejadorSQL”;</li>
    <li>$b = 'MySQL’;</li>
    <li>$c = &$a;</li>
    </ul>
    <?php

    $a = "ManejadorSQL";
    $b = 'MySQL';
    $c = &$a;
    
    echo "<p>Valores iniciales:</p>";
    echo "<ul>";
    echo "<li>a: $a</li>";
    echo "<li>b: $b</li>";
    echo "<li>c: $c</li>";
    echo "</ul>";
        
    // Segunda asignación
    $a = "PHP server";
    $b = &$a;

    echo "<h4>Valores después de la reasignación:</h4>";
    echo "<ul>";
    echo "<li>a: $a</li>";
    echo "<li>b: $b</li>";
    echo "<li>c: $c</li>";
    echo "</ul>";

    echo "<h4>Explicación:</h4>";
    echo "<p>En la segunda asignación, la referencia de c sigue apuntando a a, por lo que su valor también cambia.</p>";

    ?>
    <h2>Ejercicio 3</h2>
    <p>Muestra el contenido de cada variable inmediatamente después de cada asignación, verificar la evolución del tipo de estas variables (imprime todos los componentes de los arreglo):</p>
    <ul>
    <li>$a = “PHP5”;</li>
    <li>$z[] = &$a;</li>
    <li>$b = “5a version de PHP”;</li>
    <li>$c = $b*10;</li>
    <li>$a .= $b;</li>
    <li>$b *= $c;</li>
    <li>$z[0] = “MySQL”;</li>
    </ul>
    <?php
    $a = "PHP5";
    echo "<p>Valor de a: $a </p>";


    $z[] = &$a;
    echo "<p>Valor de z[]: ", $z[0] ,"</p>";

    $b = "5a version de PHP";
    echo "<p>Valor de b: $b </p>";

    //Por recomendacion se ectrajo el valor numerico para evitar el error ya que un string no puede ser multiplicado
    $c = intval($b) * 10;
    echo "<p>Valor de c: $c </p>";

    $a .= $b;
    echo "<p>Valor de a: $a </p>";

    $b *= $c;
    echo "<p>Valor de b: $b </p>";

    $z[0] = "MySQL";
    echo "<p>Valor de z[]: ", $z[0] ,"</p>";
  

    ?>


</body>
</html>