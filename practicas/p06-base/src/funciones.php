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


?>