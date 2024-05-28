<?php
// register.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $username = trim($_POST['username']);
    $correo = trim($_POST['correo']);
    $password = trim($_POST['password']);

    // Validar la entrada
    if (empty($nombre) || empty($apellido) || empty($username) || empty($correo) || empty($password)) {
        die('Por favor, complete todos los campos.');
    }

    // Hashear la contraseña
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Conectar a la base de datos
    $mysqli = new mysqli("localhost", "root", "", "panol");

    if ($mysqli->connect_error) {
        die("Conexión fallida: " . $mysqli->connect_error);
    }

    // Insertar el nuevo usuario
    $stmt = $mysqli->prepare("INSERT INTO usuario (nombre, apellido, username, correo, contrasenia) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nombre, $apellido, $username, $correo, $hashed_password);
    $stmt->execute();

    if ($stmt->affected_rows === 1) {
        echo "Registro exitoso.";
    } else {
        echo "Error en el registro.";
    }

    $stmt->close();
    $mysqli->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
</head>
<body>
    <form action="./crearcuenta.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required><br>
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" required><br>
        <label for="username">Nombre de usuario:</label>
        <input type="text" name="username" id="username" required><br>
        <label for="correo">Correo electronico:</label>
        <input type="text" name="correo" id="correo" required><br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required><br>
        <input type="submit" value="Registrarse">
    </form>
</body>
</html>
