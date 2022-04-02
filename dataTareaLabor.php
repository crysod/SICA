<?php
header('Content-Type: application/json');
require("controller/conexion.php");
$conexion = retornarConexion();

switch ($_GET['accion']) {
    case 'listar':
        /*$datos = mysqli_query($conexion, "select ca.id, t.id from tareas_areas AS ta INNER JOIN areas_cultivo AS ca ON ta.tareas_id = ca.id  INNER JOIN tarea AS t ON ta.areas_cultivo_id = t.id;");*/
        $datos = mysqli_query($conexion, "SELECT  ts.* from tareas_labores_culturales AS ts");
        $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
        echo json_encode($resultado);
        break;

    case 'agregar':
        $respuesta = mysqli_query($conexion, "INSERT INTO tareas_labores_culturales (labores_culturales_id, tareas_id) 
                                                VALUES ($_POST[labores_culturales_id],$_POST[tareas_id])");
        echo json_encode($respuesta);
        break;

    case 'borrar':
        $respuesta = mysqli_query($conexion, "DELETE FROM tareas_labores_culturales WHERE id=$_GET[codigo]");
        echo json_encode($respuesta);
        break;

    case 'consultar':
        $datos = mysqli_query($conexion, "SELECT * FROM tareas_labores_culturales WHERE id=$_GET[codigo]");
        $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
        echo json_encode($resultado);
        break;

    case 'modificar':
        $respuesta = mysqli_query($conexion, "UPDATE tareas_labores_culturales SET
                                                  labores_culturales_id='$_POST[labores_culturales_id]',
                                                  tareas_id='$_POST[tareas_id]'
                                                   WHERE id=$_GET[codigo]");
        echo json_encode($respuesta);
        break;
}
?>
