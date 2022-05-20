<?php
    // Validar IDs válidos
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id) {
        header('Location: /rapufaz/administrador');
    }

    // Base de datos
    require '../../includes/config/database.php';
    $db = conexionDB();

    // Obtener los datos de la propiedad
    $consulta = "SELECT * FROM productos WHERE id = ${id}";
    $resultado = mysqli_query($db, $consulta);
    $producto = mysqli_fetch_assoc($resultado);

    // Consultar para obtener los vendedores
    $consulta = "SELECT * FROM vendedores";
    $resultado = mysqli_query($db, $consulta);

    // Arreglo con mensajes de errores
    $errores = [];

    $nombre = $producto['nombre'];
    $precio = $producto['precio'];
    $vendedorId = $producto['vendedorId'];
    $imagenProducto = $producto['imagen'];

    // Ejecutar cuando el usuario envía el formulario
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
        $precio = mysqli_real_escape_string($db, $_POST['precio']);
        $vendedorId = mysqli_real_escape_string($db, $_POST['vendedor']);

        // Asignar files a una variable
        $imagen = $_FILES['imagen'];

        if(!$nombre) {
            $errores[] = "Debes añadir un nombre";
        }

        if(!$precio) {
            $errores[] = "Debes añadir un precio";
        }


        if(!$vendedorId) {
            $errores[] = "Debes seleccionar un vendedor";
        }

        if(!$imagen['name']) {
            $errores[] = "Debes añadir una imagen";
        }

        // Validar por tamaño
        if($imagen['size'] > 1000000) {
            $errores[] = "La imagen debe pesar menos de 1MB";
        }

        // Revisar que el array de errores esté vacío
        if(empty($errores)) {

            // Crear carpeta
            $carpetaImagenes = '../../imagenes/';

            if(!is_dir($carpetaImagenes)) {
                mkdir($carpetaImagenes);
            }

            $nombreImagen = '';

            /** SUBIDA DE ARCHIVOS */
            if($imagen['name']) {
                // Eliminar la imagen anterior
                unlink($carpetaImagenes . $producto['imagen']);

                // Generar un nombre único
                $nombreImagen = md5( uniqid('')) . ".jpg";

                // Subir la imagen
                move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen );
            } else {
                $nombreImagen = $producto['imagen'];
            }

            // Insertar en la base de datos
            $query = "UPDATE productos SET nombre = '${nombre}', precio = '${precio}', imagen = '${nombreImagen}',  vendedorId = ${vendedorId} WHERE id = ${id}";

            /* echo $query; */

            $resultado = mysqli_query($db, $query);

            if($resultado) {
                // Redireccionar al usuario.
                header('Location: ../?resultado=2');
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automóviles Rapufaz</title>
    <link rel="icon" href="../Img/RAPUFAZ (1).png">
    <link rel="stylesheet" href="../../app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Koulen&family=Oswald:wght@700&family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <div class="hero-imagen"></div>

    <div class="hero">
        <div class="contenedor">
            <h1 class="hero__titulo">Rapufaz</h1>
            <h2 class="hero__slogan">Personalización de Automóviles</h2>
        </div>
    </div>

    <nav class="navegacion">
        <a class="navegacion__enlace" href="/rapufaz/administrador/index.php">Admin</a>
        <a class="navegacion__enlace" href="/administrador/index.php">Inicio</a>
    </nav>

    <form class="formulario" method="POST" enctype="multipart/form-data" >
        <div class="formulario__campo">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre del producto" maxlength="40" value="<?php echo $nombre; ?>" required>
        </div>

        <div class="formulario__campo">
            <label for="precio">Precio:</label>
            <input type="decimal" id="precio" name="precio" placeholder="Precio del producto" max="999.99" step=".01" value="<?php echo $precio; ?>" required>
        </div>

        <div class="formulario__campo">
            <label for="vendedor">Vendedor del producto: </label>
            <select name="vendedor">
                <option value="">Seleccione un Vendedor</option>
                <?php while($vendedor = mysqli_fetch_assoc($resultado)): ?>
                    <option <?php echo $vendedorId === $vendedor['id'] ? 'selected' : ''; ?> value="<?php echo $vendedor['id']; ?>"><?php echo $vendedor['nombre']; ?></option>
                <?php endwhile ?>

               
            </select>
        </div>

        <label for="imagen">Imagen del producto: </label>
        <input class="formulario__imagen" type="file" name="imagen" id="imagen" accept="image/jpeg, image/png" required>
        <img src="../../imagenes/<?php echo $imagenProducto; ?>" alt="Imagen del producto" class="imagen-actualizar">

        <div class="formulario__submit">
        <input type="submit" value="Editar" class="formulario__submitbtn">

        </div>
    </form>

    <footer class="footer">
        <h4 class="footer__titulo">Información de la empresa</h4>
        <div class="footer__contenedor contenedor">
            <p class="footer__descripcion">Contacto: 5585129807</p>
            <p class="footer__descripcion">Avenida primaria, Francisco Morazán, Av. 412, Av. 510, eje 5 Norte</p>
        </div>
    </footer>
</body>
</html>