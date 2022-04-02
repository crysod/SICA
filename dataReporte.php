<?php
header('Content-Type: application/json');
require("controller/conexion.php");
$conexion = retornarConexion();

switch ($_GET['accion']) {
    case 'listar':
        $datos = mysqli_query($conexion, "SELECT  t.nombre, a.medida from tareas AS t
                                   INNER JOIN tareas_areas AS ta ON t.id = ta.areas_cultivo_id
                                   INNER JOIN areas_cultivo AS a ON a.id = ta.areas_cultivo_id");
        $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
        echo json_encode($resultado);
        break;
}
?>
