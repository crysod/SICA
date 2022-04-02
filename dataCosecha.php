<?php
header('Content-Type: application/json');
require("controller/conexion.php");
$conexion = retornarConexion();

switch ($_GET['accion']) {
    case 'listar':
        $datos = mysqli_query($conexion, "SELECT cc.* FROM cosechas As cc INNER JOIN cultivos As c ON cc.cultivos_id = c.id");
        //$datos = mysqli_query($conexion, "SELECT * FROM areas_cultivo");
        $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
        echo json_encode($resultado);
        break;

    case 'agregar':
        $respuesta = mysqli_query($conexion, "INSERT INTO cosechas (nombre, descripcion, cultivos_id) 
                                                VALUES ('$_POST[nombre]','$_POST[descripcion]',$_POST[cultivos_id])");
        echo json_encode($respuesta);
        break;

    case 'borrar':
        $respuesta = mysqli_query($conexion, "DELETE FROM cosechas WHERE id=$_GET[codigo]");
        echo json_encode($respuesta);
        break;

    case 'consultar':
        $datos = mysqli_query($conexion, "SELECT * FROM cosechas WHERE id=$_GET[codigo]");
        $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
        echo json_encode($resultado);
        break;

    case 'modificar':
        $respuesta = mysqli_query($conexion, "UPDATE cosechas SET
                                                  nombre='$_POST[nombre]',
                                                  descripcion='$_POST[descripcion]',
                                                  cultivos_id='$_POST[cultivos_id]'
                                               WHERE id=$_GET[codigo]");
        echo json_encode($respuesta);
        break;
}
?>
<?php
