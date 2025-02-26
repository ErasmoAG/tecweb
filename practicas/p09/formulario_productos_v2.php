<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Productos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
        }
        form {
            max-width: 300px;
            margin: auto;
        }
        input, textarea, button, select {
            width: 100%;
            margin: 5px 0;
            padding: 8px;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h2>Registro de Productos</h2>
    <form id="formularioProductos" action="http://localhost/tecweb/practicas/p08/set_producto_v2.php" method="post">
        <input type="hidden" name="id" value="<?= isset($_GET['id']) ? $_GET['id'] : '' ?>">

        <?php
        // Si se recibe un ID, cargar los datos del producto desde la base de datos
        if (isset($_GET['id'])) {
            $id = intval($_GET['id']);

            /** SE CREA EL OBJETO DE CONEXION */
            @$link = new mysqli('localhost', 'root', 'GASCAE10M98', 'marketzone');

            /** Comprobar la conexión */
            if ($link->connect_errno) {
                die('<p>Falló la conexión: ' . htmlspecialchars($link->connect_error) . '</p>');
            }

            /** Consultar el producto con el ID recibido */
            $sql = "SELECT * FROM productos WHERE id = ?";
            $stmt = $link->prepare($sql);
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result && $result->num_rows > 0) {
                $producto = $result->fetch_assoc();
            } else {
                echo '<script>alert("El producto no existe.");</script>';
            }

            $stmt->close();
            $link->close();
        }
        ?>

        <input type="text" name="nombre" placeholder="Nombre" id="form-name" value="<?= isset($producto) ? $producto['nombre'] : '' ?>" required>
        <div id="res1" class="error"></div>

        <select name="marca" id="form-marca" required>
            <option value="">Selecciona una marca</option>
            <option value="Samsung" <?= (isset($producto) && $producto['marca'] == 'Samsung') ? 'selected' : '' ?>>Samsung</option>
            <option value="Apple" <?= (isset($producto) && $producto['marca'] == 'Apple') ? 'selected' : '' ?>>Apple</option>
            <option value="Huawei" <?= (isset($producto) && $producto['marca'] == 'Huawei') ? 'selected' : '' ?>>Huawei</option>
        </select>
        <div id="res2" class="error"></div>

        <input type="text" name="modelo" placeholder="Modelo" id="form-modelo" value="<?= isset($producto) ? $producto['modelo'] : '' ?>" required>
        <div id="res3" class="error"></div>

        <input type="number" name="precio" placeholder="Precio" id="form-precio" step="0.01" value="<?= isset($producto) ? $producto['precio'] : '' ?>" required min="100">
        <div id="res4" class="error"></div>

        <textarea name="detalles" placeholder="Detalles" id="form-detalles"><?= isset($producto) ? $producto['detalles'] : '' ?></textarea>
        <div id="res5" class="error"></div>

        <input type="number" name="unidades" placeholder="Unidades" id="form-unidades" value="<?= isset($producto) ? $producto['unidades'] : '' ?>" required min="0">
        <div id="res6" class="error"></div>

        <input type="url" name="imagen" placeholder="Imagen (URL)" id="form-imagen" value="<?= isset($producto) ? $producto['imagen'] : '' ?>">
        <div id="res7" class="error"></div>

        <button type="submit"><?= isset($producto) ? 'Actualizar' : 'Registrar' ?></button>
        <button type="reset">Limpiar</button>
    </form>

    <script src="validaciones.js"></script>
</body>
</html>