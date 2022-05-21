<?php

function conexionDB() : mysqli {
    $db = mysqli_connect(

        "localhost","root","root","rapufaz"
    
    );
    
    if(!$db) {
        echo "Fallo en la conexión";
        exit();
    }

    return $db;
}