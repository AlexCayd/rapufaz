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
            <form action="" method="POST">
                <input type="submit" class="productos__boton" name="button1" value="Cerrar Sesión"></input>
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
            <tr class="tabla__tr producto__tr">
                <td class="tabla__td producto__td"> Producto </td>
                <td class="tabla__td producto__td">$1500.00</td>
                <td class="tabla__td producto__td">
                    <img src="../Img/Auto3.jpg" alt="Imagen de producto" class="productos-imagen">
                </td>
                <td class="contenedor-botones">
                    <div class="grid-botones">
                    <a href="../administrador/productos/actualizar.php?id=<?php echo $producto['id']; ?>" class="editar">
                        Editar
                    </a>
                    <form method="POST" class="eliminar">
                        <input type="hidden" name="id" value="<?php echo $producto['id']; ?>">
                        <input type="submit" class="eliminar" value="Eliminar" style="font-family: inherit; border: none;">
                    </form>
                    </div>
                </td>
            </tr>
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