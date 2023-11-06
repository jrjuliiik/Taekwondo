<?php


// Configuración de la base de datos
$servername = "sql10.freesqldatabase.com";
$username = "usql10659361";
$password = "pNKNYeeaLr";
$dbname = "sql10659361";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

// Obtenga los valores del formulario
$user = $_POST['username'];
$pass = $_POST['password'];

// Realizar una consulta segura para prevenir la inyección SQL
$sql = "SELECT id FROM users WHERE username = ? AND password = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $user, $pass);
$stmt->execute();
$stmt->bind_result($id);
$stmt->fetch();

// Verifique si se encontró una coincidencia en la base de datos
if ($id > 0) {
 session_start();
 $_SESSION['user_id'] = $id;
 $_SESSION['username'] = $user;

 // Redirigir al usuario a la página principal
 header("Location: index.html");
} else {
 echo "Usuario o contraseña incorrecta";
}

$stmt->close();
$conn->close();

?>