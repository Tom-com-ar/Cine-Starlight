<?php

$conexion = new mysqli('localhost','root','','cine starlight');

if(!$conexion){
    die('Error de conexión'.mysql_error());
}

else{
    echo  "Conexion realiza con exito ";
}

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$sql = "INSERT INTO `comentarios`(`nombre`, `apellido`, `telefono`, `email`, `mensaje`) VALUES ('$nombre','$apellido','$telefono','$email','$mensaje')";

if(mysqli_query($conexion, $sql)){
    $sucess = "El ingreso ha sido satisfactorio ";
    echo $sucess;
}else{
    echo "Error al ingresar datos ".mysqli_error($conexion);
}

mysqli_close($conexion);

?>