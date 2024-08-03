<?php
include 'conexion.php'; // Conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = mysqli_real_escape_string($conexion, $_POST['id']);
    $field = mysqli_real_escape_string($conexion, $_POST['field']);
    $value = mysqli_real_escape_string($conexion, $_POST['value']);

    // Consulta SQL para actualizar el usuario
    $sql = "UPDATE plato SET $field='$value' WHERE id=$id";

    if (mysqli_query($conexion, $sql)) {
        echo "Usuario actualizado exitosamente";
    } else {
        echo "Error al actualizar el usuario: " . mysqli_error($conexion);
    }

    mysqli_close($conexion); // Cierra la conexión a la base de datos
}
?>
