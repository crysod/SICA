<?php
    include_once('../../controller/conexion.php');
    $conexion = retornarConexion();

    $USER=$_POST['email'];
    $PASS=$_POST['password'];

    $consulta = mysqli_query($conexion,"SELECT u.email, u.password FROM usuarios AS u WHERE u.email = '$USER' AND u.password = '$PASS'");
    $filas=mysqli_num_rows($consulta);

    if(!empty($_POST['email']) && !empty($_POST['password'])){
        if($filas){
            header("location:../../home.php");
        }
        else{
            include("register.php");
        }
    }
    else{
        include("register.php");
    }
?>
<script>alert("Error, no entra")</script>
<?php
    mysqli_close($conexion)
?>