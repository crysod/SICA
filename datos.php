<?php
    header('Content-Type: application/json');
    require("controller/conexion.php");
    $conexion = retornarConexion();

switch ($_GET['accion']){
    case 'listar':
        /*$datos = mysqli_query($conexion, "SELECT usuarios.id, usuarios.identificacion, usuarios.nombre, usuarios.apellido,
                                                    usuarios.n_telefono, usuarios.direccion, usuarios.email, 
                                                    usuarios.password, usuarios.ficha, roles.nombre 
                                            FROM usuarios INNER JOIN roles ON usuarios.roles_id = roles.id");*/
        /*$datos = mysqli_query($conexion, "SELECT usuarios.*, roles.nombre
                                            FROM usuarios INNER JOIN roles ON usuarios.roles_id = roles.id");*/
        $datos = mysqli_query($conexion, "SELECT u.* FROM usuarios AS u");
        $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
        echo json_encode($resultado);
        break;

    case 'agregar':
        /*if(empty($_POST[n_telefono])){
            $respuesta = mysqli_query($conexion, "INSERT INTO usuarios (identificacion, nombre, apellido, direccion, email, password, ficha, roles_id)
                                                VALUES ($_POST[identificacion],'$_POST[nombre]','$_POST[apellido]',
                                                '$_POST[direccion]','$_POST[email]','$_POST[password]',$_POST[ficha],$_POST[roles_id])");
        }
        elseif(empty($_POST[direccion])){
            $respuesta = mysqli_query($conexion, "INSERT INTO usuarios (identificacion, nombre, apellido, n_telefono, email, password, ficha, roles_id)
                                                VALUES ($_POST[identificacion],'$_POST[nombre]','$_POST[apellido]',$_POST[n_telefono],
                                                '$_POST[email]','$_POST[password]',$_POST[ficha],$_POST[roles_id])");
        }
        elseif(empty($_POST[ficha])){
            $respuesta = mysqli_query($conexion, "INSERT INTO usuarios (identificacion, nombre, apellido, n_telefono, direccion, email, password, roles_id)
                                                VALUES ($_POST[identificacion],'$_POST[nombre]','$_POST[apellido]',$_POST[n_telefono],
                                                '$_POST[direccion]','$_POST[email]','$_POST[password]',$_POST[roles_id])");
        }
        if((empty($_POST[n_telefono])) && (isset($_POST[direccion])) && (isset($_POST[ficha]))){
            $respuesta = mysqli_query($conexion, "INSERT INTO usuarios (identificacion, nombre, apellido, email, password, roles_id)
                                                VALUES ($_POST[identificacion],'$_POST[nombre]','$_POST[apellido]','$_POST[email]','$_POST[password]',$_POST[roles_id])");
        }
        else{*/
            $respuesta = mysqli_query($conexion, "INSERT INTO usuarios (identificacion, nombre, apellido, n_telefono, direccion, email, password, ficha, roles_id)
                                                VALUES ($_POST[identificacion],'$_POST[nombre]','$_POST[apellido]',$_POST[n_telefono],
                                                '$_POST[direccion]','$_POST[email]','$_POST[password]',$_POST[ficha],$_POST[roles_id])");
        //}
        echo json_encode($respuesta);
        break;

    case 'borrar':
        $respuesta = mysqli_query($conexion, "DELETE FROM usuarios WHERE id=$_GET[codigo]");
        echo json_encode($respuesta);
        break;

    case 'consultar':
        $datos = mysqli_query($conexion, "SELECT id, identificacion, nombre, apellido, n_telefono, direccion, email, password, ficha, roles_id 
                                            FROM usuarios WHERE id=$_GET[codigo]");
        $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
        echo json_encode($resultado);
        break;

    case 'modificar':
        $respuesta = mysqli_query($conexion, "UPDATE usuarios SET
                                                  identificacion=$_POST[identificacion],
                                                  nombre='$_POST[nombre]',
                                                  apellido='$_POST[apellido]'
                                                  n_telefono='$_POST[n_telefono]'
                                                  direccion='$_POST[direccion]'
                                                  email='$_POST[email]'
                                                  password='$_POST[password]'
                                                  ficha='$_POST[ficha]'
                                                  roles_id='$_POST[roles_id]'
                                               WHERE id=$_GET[codigo]");
        echo json_encode($respuesta);
        break;
}
?>