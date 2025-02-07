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


    for ($i = 97; $i <= 122; $i++) {
        $arreglo[$i] = chr($i);
    }

    echo "<h3>Tabla de caracteres ASCII:</h3>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Índice (ASCII)</th><th>Letra</th></tr>";

    foreach ($arreglo as $key => $value) {
        echo "<tr><td>$key</td><td>$value</td></tr>";
    }

    echo "</table>";
}

//FUNCIONES EJERCICIO 5

function verificarEdadSexo($edad, $sexo) {
    $sexo = strtolower($sexo);

    if ($sexo == 'femenino' && $edad >= 18 && $edad <= 35) {
        echo "<h3>Bienvenida, usted está en el rango de edad permitido.</h3>";
    } else {
        echo "<h3>Acceso denegado. No cumple con los requisitos de edad o sexo.</h3>";
    }
}


//FUNCIONES EJERCICIO 6


function obtenerParqueVehicular() {
    $parqueVehicular = [
        "ABC1234" => [
            "Auto" => [
                "marca" => "HONDA",
                "modelo" => 2020,
                "tipo" => "camioneta"
            ],
            "Propietario" => [
                "nombre" => "Alfonso Esparza",
                "ciudad" => "Puebla, Pue.",
                "direccion" => "C.U., Jardines de San Manuel"
            ]
        ],
        "XYZ5678" => [
            "Auto" => [
                "marca" => "MAZDA",
                "modelo" => 2019,
                "tipo" => "sedan"
            ],
            "Propietario" => [
                "nombre" => "Consuelo Molina",
                "ciudad" => "Puebla, Pue.",
                "direccion" => "97 Oriente"
            ]
        ],
        "DEF4321" => [
            "Auto" => ["marca" => "TOYOTA", "modelo" => 2018, "tipo" => "hachback"],
            "Propietario" => ["nombre" => "Luis Pérez", "ciudad" => "Tlaxcala, Tlax.", "direccion" => "Av. Independencia 45"]
        ],
        "GHI8765" => [
            "Auto" => ["marca" => "FORD", "modelo" => 2021, "tipo" => "sedan"],
            "Propietario" => ["nombre" => "María López", "ciudad" => "Cholula, Pue.", "direccion" => "Calle 5 Sur 123"]
        ],
        "JKL1357" => [
            "Auto" => ["marca" => "CHEVROLET", "modelo" => 2017, "tipo" => "camioneta"],
            "Propietario" => ["nombre" => "Carlos Hernández", "ciudad" => "Apizaco, Tlax.", "direccion" => "Col. Centro"]
        ],
        "MNO2468" => [
            "Auto" => ["marca" => "NISSAN", "modelo" => 2022, "tipo" => "sedan"],
            "Propietario" => ["nombre" => "Ana García", "ciudad" => "Huamantla, Tlax.", "direccion" => "Av. Juárez 77"]
        ],
        "PQR9753" => [
            "Auto" => ["marca" => "VOLKSWAGEN", "modelo" => 2015, "tipo" => "hachback"],
            "Propietario" => ["nombre" => "Fernando Martínez", "ciudad" => "Tlaxcala, Tlax.", "direccion" => "Col. San Pablo"]
        ],
        "STU8642" => [
            "Auto" => ["marca" => "BMW", "modelo" => 2020, "tipo" => "sedan"],
            "Propietario" => ["nombre" => "Isabel Ruiz", "ciudad" => "Puebla, Pue.", "direccion" => "Col. La Paz"]
        ],
        "VWX7531" => [
            "Auto" => ["marca" => "KIA", "modelo" => 2019, "tipo" => "camioneta"],
            "Propietario" => ["nombre" => "Ricardo Ramírez", "ciudad" => "San Martín, Pue.", "direccion" => "Av. Reforma 13"]
        ],
        "YZA6420" => [
            "Auto" => ["marca" => "HYUNDAI", "modelo" => 2018, "tipo" => "sedan"],
            "Propietario" => ["nombre" => "Lucía Torres", "ciudad" => "Tlaxcala, Tlax.", "direccion" => "Col. Centro"]
        ],
        "BCD5319" => [
            "Auto" => ["marca" => "AUDI", "modelo" => 2021, "tipo" => "hachback"],
            "Propietario" => ["nombre" => "Jorge Castillo", "ciudad" => "Puebla, Pue.", "direccion" => "Calle 25 Poniente"]
        ],
        "EFG4208" => [
            "Auto" => ["marca" => "MERCEDES", "modelo" => 2020, "tipo" => "camioneta"],
            "Propietario" => ["nombre" => "Paola Jiménez", "ciudad" => "Tlaxcala, Tlax.", "direccion" => "Col. Industrial"]
        ],
        "HIJ3197" => [
            "Auto" => ["marca" => "TESLA", "modelo" => 2022, "tipo" => "sedan"],
            "Propietario" => ["nombre" => "Esteban Reyes", "ciudad" => "Apizaco, Tlax.", "direccion" => "Av. Hidalgo 23"]
        ],
        "KLM2086" => [
            "Auto" => ["marca" => "PEUGEOT", "modelo" => 2017, "tipo" => "hachback"],
            "Propietario" => ["nombre" => "Gabriela Mendoza", "ciudad" => "Cholula, Pue.", "direccion" => "Col. Zerezotla"]
        ],
        "NOP1975" => [
            "Auto" => ["marca" => "RENAULT", "modelo" => 2019, "tipo" => "camioneta"],
            "Propietario" => ["nombre" => "Raúl Vázquez", "ciudad" => "Puebla, Pue.", "direccion" => "Col. San Manuel"]
        ]
    ];

    return $parqueVehicular;
}

function mostrarAutoPorMatricula($matricula) {
    $parqueVehicular = obtenerParqueVehicular();

    if (array_key_exists($matricula, $parqueVehicular)) {
        echo "<h3>Información del vehículo con matrícula $matricula:</h3>";
        echo "<pre>";
        print_r($parqueVehicular[$matricula]);
        echo "</pre>";
    } else {
        echo "<h3>No se encontró ningún vehículo con la matrícula $matricula.</h3>";
    }
}

function mostrarTodosLosAutos() {
    $parqueVehicular = obtenerParqueVehicular();
    
    echo "<h3>Todos los autos registrados:</h3>";
    echo "<pre>";
    print_r($parqueVehicular);
    echo "</pre>";
}
?>


?>