<?php
header('Content-Type: application/json');
require("controller/conexion.php");
$conexion = retornarConexion();

switch ($_GET['accion']) {
    case 'listar':
        $datos = mysqli_query($conexion, "SELECT p.* FROM productos As p");
        $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
        echo json_encode($resultado);
        break;

    case 'agregar':
        $respuesta = mysqli_query($conexion, "INSERT INTO productos (codigo, nombre, descripcion) 
                                                VALUES ('$_POST[codigo]','$_POST[nombre]','$_POST[descripcion]')");
        echo json_encode($respuesta);
        break;

    case 'borrar':
        $respuesta = mysqli_query($conexion, "DELETE FROM productos WHERE id=$_GET[codigo]");
        echo json_encode($respuesta);
        break;

    case 'consultar':
        $datos = mysqli_query($conexion, "SELECT * FROM productos WHERE id=$_GET[codigo]");
        $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
        echo json_encode($resultado);
        break;

    case 'modificar':
        $respuesta = mysqli_query($conexion, "UPDATE productos SET
                                                    codigo='$_POST[codigo]',
                                                  nombre='$_POST[nombre]',
                                                  descripcion='$_POST[descripcion]'
                                               WHERE id=$_GET[codigo]");
        echo json_encode($respuesta);
        break;
}
?>
<?php
