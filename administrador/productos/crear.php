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
            <input type="text" id="nombre" name="nombre" placeholder="Nombre del producto" maxlength="40" value="" required>
        </div>

        <div class="formulario__campo">
            <label for="precio">Precio:</label>
            <input type="decimal" id="precio" name="precio" placeholder="Precio del producto" max="999.99" step=".01" value="" required>
        </div>

        <div class="formulario__campo">
            <label for="vendedor">Categoría del producto: </label>
            <select name="vendedor">
                <option value="">Seleccione una categoría</option>
                <option value="">Juan Pérez</option>
                <option value="">Rapu Ogazón</option>
            </select>
        </div>

        <label for="imagen">Imagen del producto: </label>
        <input class="formulario__imagen" type="file" name="imagen" id="imagen" accept="image/jpeg, image/png" required>

        <div class="formulario__submit">
        <input type="submit" value="Agregar" class="formulario__submitbtn">

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