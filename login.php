<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        if ($username === "admin" && $password === "admin123") {
            session_start();
            $_SESSION["username"] = $username;
            header("Location: Bienvenido.php");
            exit();
        } else {
            echo '<script>alert("Usuario o contraseña incorrectos.")</script>';
        }
    } else {
        echo "Por favor, ingrese tanto el usuario como la contraseña.";
    }
}
?>
