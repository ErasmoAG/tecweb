<?php


//FUNCION DEL PRIMER EJERCICIO
function es_multiplo7y5($num){

if ($num %5 == 0 && $num%7 == 0)
{
    echo '<h3>R= El numero ' .$num.' SI es multiplo de 5 y 7';
}
else
{
    echo '<h3>R= El numero ' .$num.' NO es multiplo de 5 y 7';
}

}


//FUNCION DEL SEGUNDO EJERCICIO
function generarMatrizAleatoria() {
    $matriz = [];
    $iteraciones = 0;
    $totalNumeros = 0;

    do {
        $fila = [];
        $fila[0] = rand(100, 999); 
        $fila[1] = rand(100, 999);
        $fila[2] = rand(100, 999);

        $matriz[] = $fila;
        $iteraciones++;
        $totalNumeros += 3;

    } while (!($fila[0] % 2 != 0 && $fila[1] % 2 == 0 && $fila[2] % 2 != 0));

    // Mostrar la matriz
    echo "<h3>Matriz generada:</h3>";
    echo "<table border='1'>";
    foreach ($matriz as $fila) {
        echo "<tr>";
        foreach ($fila as $num) {
            echo "<td>$num</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    echo "<p>$totalNumeros números obtenidos en $iteraciones iteraciones.</p>";
}

//TERCER EJERCICIOO
function encontrarMultiploWhile($multiplo) {
    echo "<h3>Usando ciclo WHILE:</h3>";
    $encontrado = false;
    $intentos = 0;

    while (!$encontrado) {
        $num = rand(1, 1000);
        $intentos++;
        if ($num % $multiplo == 0) {
            echo "El primer número múltiplo de $multiplo es: $num (en $intentos intentos)<br>";
            $encontrado = true;
        }
    }
}

function encontrarMultiploDoWhile($multiplo) {
    echo "<h3>Usando ciclo DO-WHILE:</h3>";
    $intentos = 0;

    do {
        $num = rand(1, 1000);
        $intentos++;
    } while ($num % $multiplo != 0);

    echo "El primer número múltiplo de $multiplo es: $num (en $intentos intentos)<br>";
}

//FUNCIONES EJERCICOO 4
function crearArregloAscii() {
    $arreglo = [];

    // Crear el arreglo usando un ciclo for
    for ($i = 97; $i <= 122; $i++) {
        $arreglo[$i] = chr($i);
    }

    // Mostrar el arreglo en una tabla XHTML
    echo "<h3>Tabla de caracteres ASCII:</h3>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Índice (ASCII)</th><th>Letra</th></tr>";

    foreach ($arreglo as $key => $value) {
        echo "<tr><td>$key</td><td>$value</td></tr>";
    }

    echo "</table>";
}

?>