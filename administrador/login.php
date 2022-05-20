
<?php
include '../includes/config/database.php';

$db=conexionDB();



//Funcion para crear usuario en caso de que no exista
function agregarUsuario(){  
    $db=conexionDB();
    $email="correo@correo.com";
    $pass="1";
    
    $query="INSERT INTO usuarios (email, password) VALUES ('${email}','${pass}');";
    
    mysqli_query($db,$query);
}


$errores=[];

if($_SERVER['REQUEST_METHOD']==='POST'){

    $db=conexionDB();
    //Te toma el correo electronico enviado por el form
    $email= mysqli_real_escape_string($db,filter_var($_POST['email'],FILTER_VALIDATE_EMAIL));
    //Te toma la contraseña enviada por el form
    $pass= mysqli_real_escape_string($db,$_POST['password']);
  

    //Si el correo no es valido
    if(!$email){
        //Va a enviar un error
        $errores['email']="El email es obligatorio";
    }
    //Si la contraseña no es valida
    if(!$pass){
        //Va a enviar un error
        $errores['pass']="El password es obligatorio";
    }
    //Si no hay errores
    if(empty($errores)){
        //Selecciona el usuario con el correo que se envia
        $query="SELECT * FROM usuarios WHERE email='${email}' ";
        //Ejecuta la consulta
        $resultado=mysqli_query($db,$query);
        //Si el resultado es una fila (osea que encuentra un resultado dentro de la base de datos)
        if ($resultado->num_rows){
            //Devuelve un array asociativo con los datos del usuario
            $usuario=mysqli_fetch_assoc($resultado);
            //Si la contraseña que se envia es igual a la contraseña que se encuentra en la base de datos
            if($pass==$usuario['password']){
                //Crea una sesion 
                session_start();
                //Guarda el valor de positivo dentro de la sesion
                $_SESSION['login']=true;
                //Redirecciona a la pagina de admin
                header('Location: index.php');
                
            }
            //Si la contraseña no es igual a la contraseña que se encuentra en la base de datos
            else{
                //Va a enviar un error
                $errores['pass']="El password es incorrecto";
            }
            
        }
        //En caso de que ambos valores sean incorrectos
        }else{
            //Va a enviar un error de usuario
            $errores[]="El usuario no existe";
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

    <form class="formulario" method="POST">
        <div class="formulario__grid">
            <!-- AQUI ESTAN LOS ERRORES EN CASO DE QUE SE REQUIERAN SOLO FALTA PONERLES ESTILOS -->
            <!-- En caso de que haya algun error -->
                <?php if(isset($errores)){
                    //Por cada error que exista se va a imprimir en pantalla un mensaje que corresponde a ese respectivo error
                    foreach($errores as $error){
                        echo "<p class='error'>${error}</p>";
                    }
                    ;
                }?>
                </div>
        <h2 class="formulario__titulo">Iniciar Sesión</h2>
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