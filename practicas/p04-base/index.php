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
    unset($a, $b, $c);
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
    $b = intval($b);
    $b *= $c;
    echo "<p>Valor de b: $b </p>";

    $z[0] = "MySQL";
    echo "<p>Valor de z[]: ", $z[0] ,"</p>";
  

    ?>
    <h2>Ejercicio 4</h2>
    <p>Lee y muestra los valores de las variables del ejercicio anterior, pero ahora con la ayuda de la matriz $GLOBALS o del modificador global de PHP.</p>
    <?php
    global $a, $b, $c, $z;

    echo '<p>Valores utilizando $GLOBALS:</p>';

    echo "<p>\$a = ".$GLOBALS['a']."</p>";
    echo "<p>\$b = ".$GLOBALS['b']."</p>";
    echo "<p>\$c = ".$GLOBALS['c']."</p>";
    echo "<p>\$z[0] = ".$GLOBALS['z'][0]."</p>";

    ?>

    <h2>Ejercicio 5</h2>
    <p>Dar el valor de las variables $a, $b, $c al final del siguiente script:</p>
    <ul>
    <li>$a = “7 personas”;</li>
    <li>$b = (integer) $a;</li>
    <li>$a = “9E3”;</li>
    <li>$c = (double) $a;</li>
    </ul>

    <?php
    $a = "7 personas";
    $b = (integer) $a;
    $a = "9E3";
    $c = (double) $a;

    echo "<p>Valor de \$a: $a</p>";
    echo "<p>Valor de \$b: $b</p>";
    echo "<p>Valor de \$c: $c</p>";
    ?>

    <h2>Ejercicio 6</h2>
    <p>Comprobar el valor booleano de las variables $a, $b, $c, $d, $e y $f usando var_dump().</p>
    <p>Después, transformar los valores booleanos de $c y $e en algo visible con echo.</p>
    
    <ul>
    <li>$a = “0”;</li>
    <li>$b = “TRUE”;</li>
    <li>$c = FALSE;</li>
    <li>$d = ($a OR $b);</li>
    <li>$e = ($a AND $c);</li>
    <li>$f = ($a XOR $b);</li>
    </ul>

    <?php
    $a = 0; 
    $b = true; 
    $c = false;
    $d = ($a || $b); 
    $e = ($a && $c);
    $f = ($a XOR $b); 

    echo "<p>Valores Booleanos:</p>";
    echo "<ul>";
    echo "<li>\$a = "; var_dump((bool)$a); echo "</li>"; // Se evalúa como false
    echo "<li>\$b = "; var_dump((bool)$b); echo "</li>"; // Se evalúa como true
    echo "<li>\$c = "; var_dump((bool)$c); echo "</li>"; // Se evalúa como false
    echo "<li>\$d = "; var_dump((bool)$d); echo "</li>"; // Se evalúa como true
    echo "<li>\$e = "; var_dump((bool)$e); echo "</li>"; // Se evalúa como false
    echo "<li>\$f = "; var_dump((bool)$f); echo "</li>"; // Se evalúa como true
    echo "</ul>";

    echo "<h4>Booleanos convertidos:</h4>";
    echo "<ul>";
    echo "<li>\$c = " . ($c ? 'true' : 'false') . "</li>"; // false
    echo "<li>\$e = " . ($e ? 'true' : 'false') . "</li>"; // false
    echo "<li>\$f = " . ($f ? 'true' : 'false') . "</li>"; // true
    echo "</ul>";
 ?>

    <h2>Ejercicio 7</h2>
    <p>Usando la variable predefinida $_SERVER, determina lo siguiente:</p>
    <p>a. La versión de Apache y PHP,</p>
    <p>b. El nombre del sistema operativo (servidor),</p>
    <p>c. El idioma del navegador (cliente).</p>

    <?php
    echo '<h4>Resultado de $_SERVER:</h4>';
    echo '<ul>';


    echo "<li>Versión de Apache: ".$_SERVER['SERVER_SOFTWARE']."</li>";
    echo "<li>Versión de PHP: ".phpversion()."</li>";
    echo "<li>Sistema operativo del servidor: ".php_uname()."</li>"; 
    echo "<li>Idioma del navegador (cliente): ".$_SERVER['HTTP_ACCEPT_LANGUAGE']."</li>"; 

    echo '</ul>';

?>
</body>
</html>