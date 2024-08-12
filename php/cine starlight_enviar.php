<?php

$conexion = new mysqli('localhost','root','','proyecto redes');

if(!$conexion){
    die('Error de conexión'.mysql_error());
}

else{
    echo  "Conexion realiza con exito ";
}

$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellidos'];
$telefono = $_POST['Teléfono'];
$email = $_POST['Email'];
$mensaje = $_POST['Mensaje'];

$sql = "INSERT INTO `comentarios`(`Nombre`, `Apellidos`, `Teléfono`, `Email`, `Mensaje`) VALUES ('$nombre','$apellido','$telefono','$email','$mensaje')";

if(mysqli_query($conexion, $sql)){
    echo = "El ingreso ha sido satisfactorio ";
    
}else{
    echo "Error al ingresar datos ".mysqli_error($conexion);
}

mysqli_close($conexion);

?>