<?php
include 'conexion.php';
// Obtener las credenciales del formulario de inicio de sesión
$username = $_POST['username'];
$password = $_POST['password'];

// Verificar si las credenciales son válidas
if ($username === 'maestro' && $password === 'contraseña') {
    // Las credenciales son válidas, redirigir al maestro a la página de inicio
    header('Location: index.html');
    exit();
} else {
    // Las credenciales son inválidas, mostrar un mensaje de error
    echo 'Nombre de usuario o contraseña incorrectos.';
}
