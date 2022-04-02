<?php

function retornarConexion() {
    $server="localhost";
    $user="root";
    $password="";
    $db="sica";
    $con=mysqli_connect($server,$user,$password,$db) or die("problemas con la conexion") ;
    mysqli_set_charset($con,'utf8');
    return $con;
}
?>