<?php

function conexionDB() : mysqli {
    $db = mysqli_connect(

        "localhost","root","","rapufaz"
    
    );
    
    if(!$db) {
        echo "Fallo en la conexión";
        exit();
    }

    return $db;
}