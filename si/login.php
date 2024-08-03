<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conexion, $_POST['username']);
    $password = mysqli_real_escape_string($conexion, $_POST['password']);

    $sql = "SELECT * FROM plato WHERE nombre='$username' AND contrasena='$password'";
    $result = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($result) == 1) {
        header("Location: hola.php");
    } else {
        header("Location: index.php?error=Usuario+o+contraseña+incorrectos");
    }

    mysqli_close($conexion);
}
?>