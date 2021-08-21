<?php
    $server  = "localhost";
    $user = "root";
    $password = "";
    $database = "inventario";
    $conection = mysqli_connect($server, $user, $database, $password);
    if(!$conection == true){
        echo "Conexion exitosa";
    }else{
        echo "Error en conexion";
    }
?>