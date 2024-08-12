<?php

// Establecer la conexión con la base de datos
$conexion = new mysqli('localhost', 'root', '','cine starlight');

// Verificar si la conexión fue exitosa
if ($conexion->connect_error) {
    die('Error de conexión: ' . $conexion->connect_error);
}

// Recoger los datos enviados por POST y asegurar que estén escapados
$nombre = $conexion->real_escape_string($_POST['NAMEPHP']);
$apellido = $conexion->real_escape_string($_POST['APELLIDOPHP']);
$telefono = $conexion->real_escape_string($_POST['TELEFONOPHP']);
$email = $conexion->real_escape_string($_POST['EMAILPHP']);
$mensaje = $conexion->real_escape_string($_POST['mensaje']);

// Crear la consulta SQL para insertar los datos en la tabla 'comentarios'
$sql = "INSERT INTO comentarios (Nombre, Apellidos, Teléfono, Email, Mensaje) 
        VALUES ('$nombre', '$apellido', '$telefono', '$email', '$mensaje')";

// Ejecutar la consulta y verificar si fue exitosa
if ($conexion->query($sql) === TRUE) {
    echo "El ingreso ha sido satisfactorio. Gracias por tu comentario.";
} else {
    echo "Error al ingresar datos: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();

?>
