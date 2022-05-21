<?php 
        require '../includes/config/database.php';
        $db = conexionDB();

        $busqueda = '';

        // Consultar la base de datos
        $query = "SELECT * FROM productos";

        if($_SERVER['REQUEST_METHOD'] === 'GET') {
            $busqueda = $_GET['search'];
            $query = "SELECT * FROM productos WHERE nombre LIKE '%$busqueda%'";
        }

        // Leer los resultados de la consulta
        $resultado = mysqli_query($db, $query);
        $dataid = 1;        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carrito</title>
    <link rel="icon" href="../Img/RAPUFAZ (1).png">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Koulen&family=Oswald:wght@700&family=Poppins&display=swap" rel="stylesheet">
</head>
<body >
<header id="header" class="header">
    <div class="container">
        <div class="row">
            <div class="four columns">
                <img src="img/logo.jpg" id="logo">
            </div>
            <div class="two columns u-pull-right">
                <ul>
                    <li class="submenu">
                            <img src="img/cart.png" id="img-carrito">
                            <div id="carrito">
                                    
                                    <table id="lista-carrito" class="u-full-width">
                                        <thead>
                                            <tr>
                                                <th>Imagen</th>
                                                <th>Nombre</th>
                                                <th>Precio</th>
                                                <th>Cantidad</th>
                                                <th></th>
                                            </tr>
                                            
                                        </thead>
                                        <tbody></tbody>
                                    </table>

                                        <h1>Total a pagar: <span id="total">$0</span> </h1> 
                                    <a href="#" id="vaciar-carrito" class="button u-full-width" color=#000 style="background-color: black;">Vaciar Carrito</a>
                            </div>
                    </li>
                </ul>
            </div>
        </div> 
    </div>
    </header>


    <div id="hero">
        <div class="container">
            <div class="row">
                    <div class="six columns">
                        <div class="contenido-hero">
                                <h2>RAPUFAZ</h2>
                                <p>Construye el auto de tus sueños con nosotros</p>

                                <form id="busqueda" method="get" class="formulario">
                                    <input class="u-full-width" type="text" placeholder="¿Quieres buscar algún producto?" id="buscador" name="search">
                                    <input type="submit" id="submit-buscador" class="submit-buscador" name="send">
                                </form>
                        </div>
                    </div>
            </div> 
        </div>
    </div>

    <div class="barra">
        <div class="container">
            <div class="row">
                    <div class="four columns icono icono1">
                        <p>Más de 250 modelos de autos<br>
                        Personaliza tu automóvil</p>
                    </div>
                    <div class="four columns icono icono2">
                        <p>Contamos con modelos de vanguardia <br>
                        Ofrecemos las últimas tendencias</p>
                    </div>
                    <div class="four columns icono icono3">
                        <p>Satisfacción garantizada<br>
                        Atención al cliente las 24 horas</p>
                    </div>
            </div>
        </div>
    </div>

    <div class="container section">
        <div class="footer__grid">
            <div class="columna">
                <a href="../index.php" class="columna__enlace">Inicio</a>
                <a href="../modelo.php" class="columna__enlace">Modelos</a>
            </div>

            <div class="columna">
                <a href="../design.php" class="columna__enlace">Diseños</a>
                <a href="../sucursales.php" class="columna__enlace">Sucursales</a>
            </div>

            <div class="columna">
                <a href="../promociones.php" class="columna__enlace">Promociones</a>
                <a href="https://drive.google.com/file/d/1-MPe6dM-fgT2gMFm_IlOjphfb6HIUccJ/view" class="columna__enlace">Catálogo</a>
            </div>
        </div>
    </div>

    <div id="lista-cursos" class="container">
        <h2>Personalización de automóviles</h2>
        <div class="grid-productos">
            <?php while($producto = mysqli_fetch_assoc($resultado)) : ?>
            <div class="card">
                <img src="../imagenes/<?php echo $producto['imagen']; ?>" class="imagen-curso u-full-width">
                <div class="info-card">
                    <h4><?php echo $producto['nombre']; ?></h4>
                    <img src="img/estrellas.png">
                    <p class="precio">  <span class="u-pull-right ">$<?php echo $producto['precio']; ?></span></p>
                    <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="<?php echo $dataid ?>">Agregar Al Carrito</a>
                </div>
            </div> <!--.card-->
            <?php $dataid = $dataid + 1; endwhile; ?>
        </div> <!--.row-->
    </div>  

<footer id="footer" class="footer">
        <div class="container">
            <div class="footer__grid">
                <div class="columna">
                    <a href="../index.php" class="columna__enlace">Inicio</a>
                    <a href="../modelo.php" class="columna__enlace">Modelos</a>
                </div>

                <div class="columna">
                    <a href="../design.php" class="columna__enlace">Diseños</a>
                    <a href="../sucursales.php" class="columna__enlace">Sucursales</a>
                </div>

                <div class="columna">
                    <a href="../promociones.php" class="columna__enlace">Promociones</a>
                    <a href="https://drive.google.com/file/d/1-MPe6dM-fgT2gMFm_IlOjphfb6HIUccJ/view" class="columna__enlace">Catálogo</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/app.js"></script>

</body>
</html>