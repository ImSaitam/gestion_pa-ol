<?php
$servernamebd = "localhost";
$usernamebd = "root";
$passwordbd = "";
$dbname = "panol";

// Crear la conexión
$conn = new mysqli($servernamebd, $usernamebd, $passwordbd, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    echo(die("Conexión fallida: " . $conn->connect_error));
}
print("Conexion exitosa.");
?>
