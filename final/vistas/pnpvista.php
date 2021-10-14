<?php
require_once "conexion.php";
try{
    $conn = new Conection();
    $sql2 = "SELECT * FROM pnp";
    $resultados = $conn->conectar->query($sql2);
    $conn->desconectar();
}catch (PDOException $e){
    return $e->geetMEssage();
}

foreach ($resultados as $pnp){
    echo "<pre>";
    echo $pnp[nombres];
    echo "</pre>";
}
?>
<table border="1"cellspacing="0">
    <thead>
    <tr>
        <th>idpnp</th>
        <th>nombres</th>
    </tr>
    </thead>
    <tbody>

    <tr>
        <td>a</td>
        <td>a</td>
    </tr>
    </tbody>
</table>
