<?php

// Establecer la conexión con la base de datos
$conexion = new mysqli('localhost', 'phpmyadmin', 'RedesInformaticas', 'tiezzi');

// Verificar si la conexión fue exitosa
if ($conexion->connect_error) {
    die('Error de conexión: ' . $conexion->connect_error);
}

// Recoger los datos enviados por POST y asegurar que estén escapados
$nombre = mysqli_real_escape_string($conexion, $_POST['NAMEPHP']);
$apellido = mysqli_real_escape_string($conexion, $_POST['APELLIDOPHP']);
$telefono = mysqli_real_escape_string($conexion, $_POST['TELEFONOPHP']);
$email = mysqli_real_escape_string($conexion, $_POST['EMAILPHP']);
$mensaje = mysqli_real_escape_string($conexion, $_POST['mensaje']);

// Crear la consulta SQL para insertar los datos en la tabla 'comentarios'
$sql = "INSERT INTO `comentarios` (`Nombre`, `Apellidos`, `Teléfono`, `Email`, `Mensaje`) 
        VALUES ('$nombre', '$apellido', '$telefono', '$email', '$mensaje')";

// Ejecutar la consulta y verificar si fue exitosa
if ($conexion->query($sql) === TRUE) {
    echo "Gracias por mandarnos un comentario. Ingreso exitoso.";
} else {
    echo '<script>alert("Error al ingresar datos: ' . $conexion->error;
}

// Cerrar la conexión
$conexion->close();

?>