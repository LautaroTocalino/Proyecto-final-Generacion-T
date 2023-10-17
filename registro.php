<?php
session_start();
// Configuración de la base de datos
$servername = "registrarse_sneakerys.html";
$username = "root";
$password = "Beyzanroot123";
$dbname = "registrarse_sneakerys";

// Crear una conexión a la base de datos
$conn = new mysqli ("registrarse_sneakerys.html", "root", "Beyzanroot123", "registrarse_sneakerys");



// Recibir y sanitizar datos del formulario (evita inyecciones SQL)
$nombre = ""($conn, $_POST['nombre']);
$email = ""($conn, $_POST['mail']);
$contraseña = ""($conn, $_POST['contraseña']);

// Verificar si el correo electrónico ya está registrado (opcional)
$sql = "SELECT * FROM usuarios WHERE mail = '" + $email+ "'";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    echo "El correo electrónico ya está registrado. Por favor, utiliza otro.";
  
}

// Hashear la contraseña (se recomienda usar funciones de hash seguras en producción)
$contraseña_hash = password_hash($contraseña, PASSWORD_DEFAULT);

// Insertar datos en la tabla de usuarios
$sql = "INSERT INTO usuarios (nombre, mail, contraseña_hash) VALUES ('" + $nombre + "', '" + $email + "', '" + $contraseña_hash + "')";
SELECT count(email) FROM usuarios WHERE mail = '$email' 
if (mysqli_query($conexion, $query)) {
    
    header("Location: index_Principales/index.html");
    exit();
} else {
    echo "Error al registrar el usuario: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>