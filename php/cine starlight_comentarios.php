<body>
<html>

<?php

$conexion = new mysqli('localhost','root','','cine starlight');

if(!$conexion){
    die('Error de conexión'.mysql_error());
}

$sql ="SELECT Nombre, Apellidos	, Teléfono	, Email	, Mensaje	 FROM comentarios";

$result = $conexion->query($sql);

if ($result -> num_rows > 0){
    while ($row = $result -> fetch_assoc()){
        echo " Nombre: " .$row["Nombre"]. " Apellidos	: " .$row["Apellidos	"]. " Teléfono	: " .$row["Teléfono	"].   " Email	: " .$row["Email	"]. " Mensaje	: " .$row["Mensaje	"]."<br>";

    }
}else{
    echo "0 resultados";
}

$conexion -> close();

?>
</body>
</html>    