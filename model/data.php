<?php
    header('Content-Type: application/json');
    require("controller/conexion.php");
    $conexion = retornarConexion();

    $respuesta = mysqli_query($conexion, "INSERT INTO cultivos (referencia, nombre, fecha_registro, descripcion) 
                                                VALUES ('$_POST[referencia]','$_POST[nombre]','$_POST[fecha_registro]','$_POST[descripcion]')");
    echo json_encode($respuesta);
?>