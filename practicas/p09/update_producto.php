<?php
// Conexión a MySQL
$link = new mysqli("localhost", "root", "GASCAE10M98", "marketzone");

// Verificar la conexión
if ($link->connect_error) {
    die("ERROR: No pudo conectarse con la DB. " . $link->connect_error);
}

// Recibe el ID del formulario (POST) o de la URL (GET)
$id = isset($_POST['id']) ? intval($_POST['id']) : (isset($_GET['id']) ? intval($_GET['id']) : 0);

// Validar que el ID es mayor que 0
if ($id === 0) {
    die("ERROR: ID de producto no válido. Verifica que se esté enviando correctamente.");
}

// Recibe el resto de los datos del formulario (POST)
$nombre = isset($_POST['nombre']) ? $link->real_escape_string($_POST['nombre']) : '';
$marca = isset($_POST['marca']) ? $link->real_escape_string($_POST['marca']) : '';
$modelo = isset($_POST['modelo']) ? $link->real_escape_string($_POST['modelo']) : '';
$precio = isset($_POST['precio']) ? floatval($_POST['precio']) : 0;
$detalles = isset($_POST['detalles']) ? $link->real_escape_string($_POST['detalles']) : '';
$unidades = isset($_POST['unidades']) ? intval($_POST['unidades']) : 0;
$imagen = isset($_POST['imagen']) ? $link->real_escape_string($_POST['imagen']) : '';

// Sentencia SQL para actualizar el producto
$sql = "UPDATE productos SET 
        nombre = ?, 
        marca = ?, 
        modelo = ?, 
        precio = ?, 
        detalles = ?, 
        unidades = ?, 
        imagen = ? 
        WHERE id = ?";

$stmt = $link->prepare($sql);
$stmt->bind_param("sssdsisi", $nombre, $marca, $modelo, $precio, $detalles, $unidades, $imagen, $id);

// Ejecuta la consulta
if ($stmt->execute()) {
    echo "Registro actualizado correctamente.<br>";
} else {
    die("ERROR: No se ejecutó la actualización. " . $stmt->error);
}

// Cerrar la conexión
$stmt->close();
$link->close();
?>

<!-- Hipervínculos para regresar a las tablas de productos -->
<a href="get_productos_xhtml_v2.php">Ver todos los productos</a><br>
<a href="get_productos_vigentes_v2.php">Ver productos vigentes</a>