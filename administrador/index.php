<?php 
    session_start();
    $auth=$_SESSION['login'];

    if (!$auth) {
        header("Location:login.php"); 
    }

    // Importar la conexión
    include '../includes/config/database.php';
    $db = conexionDB();

    // Escribir el query
    $query = "SELECT * FROM productos";

    // Consultar la BD
    $resultadoConsulta = mysqli_query($db, $query);

    // Consulta para verificar el mensaje
    $resultado = $_GET['resultado'] ?? null;

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if($id) {
            // Eliminar el archivo
            $query = "SELECT imagen FROM productos WHERE id = ${id}";
            $resultado = mysqli_query($db, $query);
            $producto = mysqli_fetch_assoc($resultado);

            unlink('../imagenes/' . $producto['imagen']);


            // Eliminar la propiedad
            $query = "DELETE FROM productos WHERE id = ${id}";
            $resultado = mysqli_query($db, $query);

            if($resultado) {
                header('Location: ./?resultado=3');
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rapufaz - Admin</title>
    <link rel="stylesheet" href="../app.css">
    <link rel="icon" href="../Img/RAPUFAZ (1).png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Koulen&family=Oswald:wght@700&family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <div class="hero-imagen"></div>

    <div class="hero">
        <div class="contenedor">
            <h1 class="hero__titulo">Rapufaz</h1>
            <h2 class="hero__slogan">Panel de Administración</h2>
        </div>
    </div>

    <nav class="navegacion">
        <a class="navegacion__enlace" href="/rapufaz/administrador/index.php">Admin</a>
        <a class="navegacion__enlace" href="/rapufaz/index.php">Inicio</a>
    </nav>

    <h1 class="misionvision__titulo">Productos de Rapufaz</h1>
    <main class="productos contenedor">
        <div class="productos__navegacion">
            <a href="/rapufaz/administrador/productos/crear.php" class="productos__boton">Nuevo Producto</a>
            <!-- Codigo para salir de sesion auth -->
        <?php
        if(array_key_exists('button1', $_POST)) {
            salirSesion();
        }
        function salirSesion(){
            session_destroy();
            header("Location:../administrador/login.php");
        }
        ?>
            <form action="" method="POST">
            <input type="submit" class="productos__boton" name="button1" value="Salir de sesion" > </input>
            </form>
        </div>
    </main>

    <table class="productos tabla">
        <thead class="tabla__thead">
            <th class="tabla__th">Nombre</th>
            <th class="tabla__th">Precio</th>
            <th class="tabla__th">Imagen</th>
            <th class="tabla__th">Botones</th>
        </thead>

        <tbody>
                <?php while($producto = mysqli_fetch_assoc($resultadoConsulta)) : ?>
                <tr class="tabla__tr producto__tr">
                    <td class="tabla__td producto__td"> <?php echo $producto['nombre'] ?> </td>
                    <td class="tabla__td producto__td">$ <?php echo $producto['precio'] ?> </td>
                    <td class="tabla__td producto__td">
                        <img src="../imagenes/<?php echo $producto['imagen']; ?>" alt="Imagen de producto" class="productos-imagen">
                    </td>
                    <td class="contenedor-botones">
                        <div class="grid-botones">
                        <a href="../administrador/productos/actualizar.php?id=<?php echo $producto['id']; ?>" class="editar">
                            Editar
                        </a>
                        <form method="POST" class="eliminar">
                            <input type="hidden" name="id" value="<?php echo $producto['id']; ?>">
                            <input type="submit" class="eliminar" value="Eliminar" style="font-family: inherit; border: none; font-size: 18px;">
                        </form>
                        </div>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
    </table>

    <footer class="footer">
        <h4 class="footer__titulo">Información de la empresa</h4>
        <div class="footer__contenedor contenedor">
            <p class="footer__descripcion">Contacto: 5585129807</p>
            <p class="footer__descripcion">Avenida primaria, Francisco Morazán, Av. 412, Av. 510, eje 5 Norte</p>
        </div>
    </footer>
</body>
</html>