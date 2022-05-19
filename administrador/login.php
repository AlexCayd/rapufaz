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

    <form class="formulario">
        <h2 class="formulario__titulo">Iniciar Sesión</h2>
        <div class="formulario__grid">
            <div class="formulario__campo">
                <label for="email">Correo Electrónico: </label>
                <input type="email" name="email" placeholder="Correo Electrónico" required>
            </div>
    
            <div class="formulario__campo">
                <label for="password">Contraseña: </label>
                <input type="password" name="password" placeholder="Contraseña" required>
            </div>
        </div>
        <div class="formulario__submit">
            <input type="submit" class="formulario__submitbtn" value="Iniciar Sesión">
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