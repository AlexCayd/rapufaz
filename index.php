<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automóviles Rapufaz</title>
    <link rel="stylesheet" href="app.css">
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
            <h2 class="hero__slogan">Personalización de Automóviles</h2>
        </div>
    </div>

    <nav class="navegacion">
        <a class="navegacion__enlace" href="/rapufaz/administrador/login.php">Admin</a>
        <a class="navegacion__enlace" href="index.php">Inicio</a>
    </nav>

    <section class="misionvision">
        <h2 class="misionvision__titulo">Construye el auto de tus sueños con nosotros</h2>
        <div class="contenedor misionvision__grid">
            <p class="misionvision__card">Misión: Ofrecer a nuestros clientes un producto de calidad, con los mejores precios del mercado, crear autos originales para personas únicas.</p>
            <p class="misionvision__card">Visión: Ser una empresa líder en la personalización de automóviles a nivel nacional, ofreciendo un servicio de calidad, moderno e innovador que cubra las necesidades y gustos de nuestros clientes.</p>    
        </div>
    </section>

    <section class="servicios">
        <h2 class="servicios__titulo">Conoce todos nuestros servicios</h2>
        <div class="servicios__gridc contenedor">
            <div class="servicios__grid">
                <a href="modelo.php" class="servicios__card">
                    <h3 class="servicios__servicio">Modelos</h3>
                    <img src="img/Auto2.jpg" alt="Servicio">
                </a>
            </div>
    
            <div class="servicios__grid">
                <a href="design.php" class="servicios__card">
                    <h3 class="servicios__servicio">Diseño</h3>
                    <img src="img/Auto3.jpg" alt="Servicio">
                </a>
            </div>
    
            <div class="servicios__grid">
                <a href="Carrito/index.php" class="servicios__card">
                    <h3 class="servicios__servicio">Compras</h3>
                    <img src="img/Modelos_2.jpg" alt="Servicio">
                </a>
            </div>
    
            <div class="servicios__grid">
                <a href="sucursales.php" class="servicios__card">
                    <h3 class="servicios__servicio">Sucursales</h3>
                    <img src="img/Modelos_6.jpg" alt="Servicio">
                </a>
            </div>
    
            <div class="servicios__grid">
                <a href="promociones.php" class="servicios__card">
                    <h3 class="servicios__servicio">Promociones</h3>
                    <img src="img/Auto5.jpg" alt="Servicio">
                </a>
            </div>
    
            <div class="servicios__grid">
                <a href="https://drive.google.com/file/d/1-MPe6dM-fgT2gMFm_IlOjphfb6HIUccJ/view?usp=sharing" class="servicios__card">
                    <h3 class="servicios__servicio">Catálogo</h3>
                    <img src="img/Catalogo.jpg" alt="Servicio">
                </a>
            </div>
        </div>
    </section>

    <footer class="footer">
        <h4 class="footer__titulo">Información de la empresa</h4>
        <div class="footer__contenedor contenedor">
            <p class="footer__descripcion">Contacto: 5585129807</p>
            <p class="footer__descripcion">Avenida primaria, Francisco Morazán, Av. 412, Av. 510, eje 5 Norte</p>
        </div>
    </footer>
</body>
</html>