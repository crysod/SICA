<?php
    header('Content-Type: application/json');
    require("controller/conexion.php");
    $conexion = retornarConexion();

    switch ($_GET['accion']) {
        case 'listar':
            $datos = mysqli_query($conexion, "SELECT ac.* FROM areas_cultivo As ac");
            $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
            echo json_encode($resultado);
            break;

        case 'agregar':
            $respuesta = mysqli_query($conexion, "INSERT INTO areas_cultivo (nombreA, medida, cantidad, ubicacion, cultivos_id) 
                                                VALUES ('$_POST[nombre]','$_POST[medida]',$_POST[cantidad],'$_POST[ubicacion]',$_POST[cultivos_id])");
            echo json_encode($respuesta);
            break;

        case 'borrar':
            $respuesta = mysqli_query($conexion, "DELETE FROM areas_cultivo WHERE id=$_GET[codigo]");
            echo json_encode($respuesta);
            break;

        case 'consultar':
            $datos = mysqli_query($conexion, "SELECT * FROM areas_cultivo WHERE id=$_GET[codigo]");
            $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
            echo json_encode($resultado);
            break;

        case 'modificar':
            $respuesta = mysqli_query($conexion, "UPDATE areas_cultivo SET
                                                  nombreA='$_POST[nombre]',
                                                  medida='$_POST[medida]',
                                                  cantidad='$_POST[cantidad]',
                                                  ubicacion='$_POST[ubicacion]',
                                                  cultivos_id='$_POST[cultivos_id]'
                                               WHERE id=$_GET[codigo]");
            echo json_encode($respuesta);
            break;
}
?>
