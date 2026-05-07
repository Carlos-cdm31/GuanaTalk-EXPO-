<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Aquí iría la validación con la base de datos SQL
    if (!empty($email) && !empty($password)) {
        echo "Intentando iniciar sesión para: " . htmlspecialchars($email);
    } else {
        echo "Por favor, completa todos los campos.";
    }
}
?>