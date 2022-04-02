<?php
    include_once('../../controller/conexion.php');
    $conexion = retornarConexion();

    $respuesta = mysqli_query($conexion, "INSERT INTO usuarios (identificacion, nombre, apellido, email, password, ficha, roles_id)
                                    VALUES ($_POST[identificacion],'$_POST[nombre]','$_POST[apellido]','$_POST[email]','$PASSWORD',$_POST[ficha],$_POST[roles_id])");

    if ($respuesta){
        header("location:login.php");
    }
    else{
        include("register.php");
    }
?>
    <script>alert("Error")</script>
<?php
mysqli_free_result($resultado);
mysqli_close($conexion)
?>
