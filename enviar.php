<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $email = htmlspecialchars($_POST["email"]);
    $mensaje = htmlspecialchars($_POST["mensaje"]);

    echo "<h2>¡Datos recibidos correctamente!</h2>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Correo:</strong> $email</p>";
    echo "<p><strong>Mensaje:</strong><br>$mensaje</p>";
} else {
    echo "Acceso no permitido.";
}
?>