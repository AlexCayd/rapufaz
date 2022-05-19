<?php

function conexionDB() : mysqli {
    $db = mysqli_connect(
        // $_ENV['DB_HOST'], 
        // $_ENV['DB_USER'], 
        // $_ENV['DB_PASS'],
        // $_ENV['DB_BD']
        "localhost","root","root","artecalendaweb"
    
    );
    if(!$db) {
        echo "Fallo en la conexión";
        exit();
    }

    return $db;
}