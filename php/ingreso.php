<?

// Establecer la conexión con la base de datos
$conexion = new mysqli('localhost', 'phpmyadmin', 'RedesInformaticas','tiezzi');

// Verificar si la conexión fue exitosa
if (!$conexion) {
    die('Error de conexión:');
}

// Recoger los datos enviados por POST y asegurar que estén escapados
$nombre = $_POST['NAMEPHP'];
$apellido = $_POST['APELLIDOPHP'];
$telefono = $_POST['TELEFONOPHP'];
$email = $_POST['EMAILPHP'];
$mensaje = $_POST['mensaje'];

// Crear la consulta SQL para insertar los datos en la tabla 'comentarios'
$sql = "INSERT INTO 'comentarios' ('Nombre', 'Apellidos', 'Teléfono', 'Email', 'Mensaje') 
        VALUES ('$nombre', '$apellido', '$telefono', '$email', '$mensaje')";

// Ejecutar la consulta y verificar si fue exitosa
if (mysqli_query($sql) === TRUE) {
    echo "El ingreso ha sido satisfactorio. Gracias por tu comentario.";
} else {
    echo "Error al ingresar datos: " . error;
}

// Cerrar la conexión
mysqli_close($conexion);

?>
