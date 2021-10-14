<?php
$dsn = "mysql:host=localhost:3307;dbname=sistemapnp";
$username = "root";
$password = "Aris123";
$opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES "UTF8"');

try{
    $conexion =new PDO($dsn, $username, $password, $opciones);

    $sql2 = "SELECT * FROM pnp WHERE idpnp=3";

    $resultados = $conexion ->query($sql2);

    foreach ($resultados as $pnp){
        echo "<pre>";
        echo $pnp["nombres"];
    }
    $conexion = null;
}catch (PDOException $e){
    echo $e ->getMessage();
}