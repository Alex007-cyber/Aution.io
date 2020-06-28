<?php
$server="localhost";
$user="alex";
$pass="alexcuatepitzi";
$db="aution1";
$conexion = new mysqli($server,$user,$pass,$db);

if($conexion->connect_error){
    die("la conexion a fallado" . $conexion->connect_error );
}else{echo "conectado";}



?>