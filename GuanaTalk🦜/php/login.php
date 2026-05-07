<?php
    include("conexion.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM usuarios WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

    if ($result->num_rows > 0) {
            $usuario = $result->fetch_assoc();

            if (password_verify($password, $username['password'])) {
                echo "✅ Login exitoso. Bienvenido " . htmlspecialchars($username['nombre']);
                // Aquí puedes iniciar sesión con $_SESSION
                // session_start();
                // $_SESSION['username'] = $username['nombre'];
            } else {
                echo "❌ Contraseña incorrecta.";
            }
        } else {
            echo "❌ Usuario no encontrado.";
        }
    }
?>