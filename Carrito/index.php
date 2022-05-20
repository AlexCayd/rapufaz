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
                                <form action="#" id="busqueda" method="post" class="formulario">
                                    <input class="u-full-width" type="text" placeholder="¿Quieres buscar algún producto?" id="buscador">
                                    <input type="submit" id="submit-buscador" class="submit-buscador">
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
        <div class="row">
            <div class="four columns">
                <div class="card">
                    <img src="img/imag1.webp" class="imagen-curso u-full-width">
                    <div class="info-card">
                        <h4>4 Llantas 215/45R18 93Y Goodyear Eagle F1 ASYM 3</h4>
                        <img src="img/estrellas.png">
                        <p class="precio">$3000  <span class="u-pull-right ">$2500</span></p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar Al Carrito</a>
                    </div>
                </div> <!--.card-->
            </div>
            <div class="four columns">
                    <div class="card">
                        <img src="img/imag2.jpg" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>Llanta 215/45R18 93W Uniroyal Tiger Paw GTZ AS 2</h4>
                            <img src="img/estrellas.png">
                            <p class="precio">$4000  <span class="u-pull-right ">$3500</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="2">Agregar Al Carrito</a>
                        </div>
                    </div>
            </div>
            <div class="four columns">
                    <div class="card">
                        <img src="img/imag3.jpg" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>215/65 R17 BRIDGESTONE ECOPIA HL422 PLUS 99H</h4>
                            <img src="img/estrellas.png">
                            <p class="precio">$4000  <span class="u-pull-right ">$3000</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="3">Agregar Al Carrito</a>
                        </div>
                    </div> <!--.card-->
            </div>

        </div> <!--.row-->
        <div class="row">
            <div class="four columns">
                <div class="card">
                    <img src="img/imag4.jpg" class="imagen-curso u-full-width">
                    <div class="info-card">
                        <h4>Rines Pilot Spyder Performance Cubierta de la Rueda, 14''</h4>
                        <img src="img/estrellas.png">
                        <p class="precio">$1000  <span class="u-pull-right ">$800</span></p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="4">Agregar Al Carrito</a>
                    </div>
                </div> <!--.card-->
            </div>
            <div class="four columns">
                    <div class="card">
                        <img src="img/imag5.jpg" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>Llanta Continental 225/45Z Rin 17</h4>
                            <img src="img/estrellas.png">
                            <p class="precio">$4500  <span class="u-pull-right ">$4000</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="5">Agregar Al Carrito</a>
                        </div>
                    </div> <!--.card-->
            </div>
            <div class="four columns">
                    <div class="card">
                        <img src="img/img6.jpg" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>Barra de luz de la rejilla central del coche luces de funcionamiento fuera de la carretera</h4>
                            <img src="img/estrellas.png">
                            <p class="precio">$800  <span class="u-pull-right ">$600</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="6">Agregar Al Carrito</a>
                        </div>
                    </div> <!--.card-->
            </div>
        </div> <!--.row-->
        <div class="row">
            <div class="four columns">
                <div class="card">
                    <img src="img/imag7.jpg" class="imagen-curso u-full-width">
                    <div class="info-card">
                        <h4>Faro LED para Auto Tunix 45 W</h4>
                        <img src="img/estrellas.png">
                        <p class="precio">$2000  <span class="u-pull-right ">$1500</span></p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="7">Agregar Al Carrito</a>
                    </div>
                </div> <!--.card-->
            </div>
            <div class="four columns">
                    <div class="card">
                        <img src="img/imag8.jpg" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>BOSS Audio Estéreo para automóvil, Bluetooth, MP3/USB/SD Am/FM</h4>
                            <img src="img/estrellas.png">
                            <p class="precio">$2000  <span class="u-pull-right ">$1500</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="8">Agregar Al Carrito</a>
                        </div>
                    </div> <!--.card-->
            </div>
            <div class="four columns">
                    <div class="card">
                        <img src="img/imag9.jpg" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>1LE1503-1EB43-4AA4 Siemens</h4>
                            <img src="img/estrellas.png">
                            <p class="precio">$30000  <span class="u-pull-right ">$20000</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="9">Agregar Al Carrito</a>
                        </div>
                    </div> <!--.card-->
            </div>
        </div> <!--.row-->
        <div class="row">
                <div class="four columns">
                    <div class="card">
                        <img src="img/imag10.jpg" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>Joowand Kit de construcción de Motor Modelo</h4>
                            <img src="img/estrellas.png">
                            <p class="precio">$10000  <span class="u-pull-right ">$8000</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="10">Agregar Al Carrito</a>
                        </div>
                    </div> <!--.card-->
                </div>
                <div class="four columns">
                        <div class="card">
                            <img src="img/imag11.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Frenos de disco </h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$6000  <span class="u-pull-right ">$5000</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="11">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
                <div class="four columns">
                        <div class="card">
                            <img src="img/imag12.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Frenos de tambor</h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$4000  <span class="u-pull-right ">$3000</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="12">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
             </div> <!--.row-->
        <div class="row">
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag13.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Frenos de ABS </h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$6000  <span class="u-pull-right ">$5500</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="13">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag14.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Frenos de mano </h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$2000  <span class="u-pull-right ">$1500</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="14">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag15.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Carrocería monovolumen </h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$20000  <span class="u-pull-right ">$15000</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="15">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
             </div> <!--.row-->
        <div class="row">
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag16.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Carrocería dos volumenes </h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$25000  <span class="u-pull-right ">$20000</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="16">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag17.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Carrocería tres volumenes </h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$28000  <span class="u-pull-right ">$25000</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="17">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag18.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Chasis Independiente </h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$10000  <span class="u-pull-right ">$8000</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="18">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            </div> <!--.row-->
         <div class="row">
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag19.webp" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Chasis Autoportante</h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$100000  <span class="u-pull-right ">$85000</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="19">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag20.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Locksmart Cerradura de Puerta con Cilindro y Llaves </h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$600  <span class="u-pull-right ">$400</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="20">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag21.jpeg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Termoplásticos </h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$50000  <span class="u-pull-right ">$30000</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="21">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
             </div> <!--.row-->
        <div class="row">
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag22.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Termoestables</h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$60000  <span class="u-pull-right ">$50000</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="22">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag23.webp" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Elastómeros</h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$40000  <span class="u-pull-right ">$45000</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="23">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag11.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Frenos de disco </h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$6000  <span class="u-pull-right ">$5000</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="24">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            </div> <!--.row-->
         <div class="row">
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag24.webp" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Dispositivo Obd2 Para Aumentar La Potencia De Los Caballos D</h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$60000  <span class="u-pull-right ">$50000</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="25">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag25.webp" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Obd2 Tuning Reprogramador Nitro</h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$500  <span class="u-pull-right ">$300</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="26">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag26.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Vw Tiguan 2.0t 1.4t </h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$5000  <span class="u-pull-right ">$4000</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="27">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            </div> <!--.row-->
                <div class="row">
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag27.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>SUSPENSIÓN RÍGIDA</h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$10000  <span class="u-pull-right ">$8000</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="28">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag28.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>SUSPENSIÓN INDEPENDIENTE</h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$15000  <span class="u-pull-right ">$10000</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="29">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag29.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>SUSPENSIÓN MCPHERSON </h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$20000  <span class="u-pull-right ">$15000</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="30">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            </div> <!--.row-->
             <div class="row">
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag30.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Control de audio LC-4.800</h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$15000  <span class="u-pull-right ">$13000</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="31">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag31.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Control de audio LC-1.1500</h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$10000  <span class="u-pull-right ">$9000</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="32">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag32.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Control de audio LC-1.800 </h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$20000  <span class="u-pull-right ">$15000</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="33">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            </div> <!--.row-->
                     <div class="row">
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag33.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Pintura bicapa</h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$6000  <span class="u-pull-right ">$5000</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="34">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag34.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Pintura tricapa</h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$15000  <span class="u-pull-right ">$10000</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="35">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag35.webp" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Tejido Plano 3k </h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$6000 <span class="u-pull-right ">$5000</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="36">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            </div> <!--.row-->
                <div class="row">
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag36.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Tejido Twill 3k</h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$10000  <span class="u-pull-right ">$9000</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="37">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag37.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>ACR-1</h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$9000  <span class="u-pull-right ">$7000</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="38">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag38.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Juego de componentes de aluminio Power de 6,5"</h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$8000 <span class="u-pull-right ">$6000</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="39">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            </div> <!--.row-->
                        <div class="row">
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag39.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Altavoces coaxiales </h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$11000  <span class="u-pull-right ">$10000</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="40">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag40.webp" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Altavoces de componentes de rendimiento (MT650CII)</h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$18000  <span class="u-pull-right ">$15000</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="41">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag41.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Aleron Clásico A4 Jetta Tipo Vr6 Mk4 Plástico Cajuela</h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$800 <span class="u-pull-right ">$649</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="42">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            </div> <!--.row-->
                                <div class="row">
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag42.webp" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Aleron Medallon Jetta A6 Mk6 Tipo Fibra De Carbono </h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$2000  <span class="u-pull-right ">$1450</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="43">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag43.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Aleron Medallón Jetta Clásico Tipo Original Plástico </h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$600  <span class="u-pull-right ">$589</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="44">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag44.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Aleron Lip Para Audi A5 Coupe Tipo Rs5 17 - 21 </h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$5000 <span class="u-pull-right ">$3900</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="45">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            </div> <!--.row-->
                                        <div class="row">
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag45.webp" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Spliter Lip Spoiler Laterales Estribos Univerales Carbon Abs </h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$700  <span class="u-pull-right ">$549</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="46">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag46.webp" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Spoiler Delantero Universal 4 Pzs Labio Rojo Negro Piano </h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$2000  <span class="u-pull-right ">$1099</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="47">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag47.webp" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Aleron Lip Para Audi A5 Coupe Tipo Rs5 17 - 21 </h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$5000 <span class="u-pull-right ">$3900</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="48">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            </div> <!--.row-->
                                                <div class="row">
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag48.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Estribos Spoilers Laterales Universal Recortable 1.94 Mts </h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$1500  <span class="u-pull-right ">$966</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="49">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag49.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Sujetadores Soportes 20 Cm Lip Fascia Splitter Spoiler Rod</h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$700  <span class="u-pull-right ">$499</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="50">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag50.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Tomas De Aire Para Cofre Auto Entradas/salidas Universales </h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$2000 <span class="u-pull-right ">$1500</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="51">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            </div> <!--.row-->
                                                        <div class="row">
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag51.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>2x Carbono Capucha De Entrada De Flujo De Aire Del Coche</h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$600  <span class="u-pull-right ">$431</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="52">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag52.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Malla Rejilla Universal Tuning Aspecto Deportivo Auto</h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$500  <span class="u-pull-right ">$298</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="53">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag53.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>TMalla Rejilla Racing Universal Plastica </h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$400 <span class="u-pull-right ">$298</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="54">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            </div> <!--.row-->
                                                              <div class="row">
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag54.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Puerta Trasera Izquierda Blazer 2019 2020 2021 /05</h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$11000  <span class="u-pull-right ">$9499</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="55">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag55.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Puerta Trasera Derecha Frontier 4 Puertas 2016 Al 2020 P305</h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$3000  <span class="u-pull-right ">$2500</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="56">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag56.webp" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Puerta Urvan 2007 2008 2009 2010 2011 2012 2013 </h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$5000 <span class="u-pull-right ">$3935</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="57">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            </div> <!--.row-->
                                                                      <div class="row">
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag57.webp" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Tapa Cajuela Peugeot Partner 13-18 678 Tras Izq </h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$10000  <span class="u-pull-right ">$7900</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="58">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag58.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Pintura Duratrax Para Carrocerias De Policarbonato En Spray</h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$4000  <span class="u-pull-right ">$2944</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="59">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag59.webp" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Pintura Automotriz Original Desert Mist Automovil 19173 </h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$2000 <span class="u-pull-right ">$1079</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="60">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            </div> <!--.row-->
                                                                      <div class="row">
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag60.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Pintura Automotriz Esmalte Acrílico Secado Rápido</h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$6000  <span class="u-pull-right ">$4965</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="61">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag61.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Rust-Oleum® Galón de Pintura para Rayas</h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$3500  <span class="u-pull-right ">$2449</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="62">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag62.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Land Rover Defender Harris Tweed Edition</h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$8000 <span class="u-pull-right ">$7400</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="63">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            </div> <!--.row-->
                                                                              <div class="row">
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag63.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Synthetic Leather - Universal Fit Car</h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$9000  <span class="u-pull-right ">$8400</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="64">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag64.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Legacy Malibu Maxima Tacoma</h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$8000  <span class="u-pull-right ">$7800</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="65">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            <div class="four columns">
                        <div class="card">
                            <img src="img/imag65.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Mercedes-Benz Concept IAA</h4>
                                <img src="img/estrellas.png">
                                <p class="precio">$10500 <span class="u-pull-right ">$9975</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="66">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
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