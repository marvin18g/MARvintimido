<?php
include "config.php";


$nombre = $_POST["nombre"];
$status = $_POST["status"];

$sql = "UPDATE roles SET nombre = '$nombre', status = '$status' WHERE id_roles = :id";

if (mysqli_query($conn, $sql)) {
  echo "Datos actualizados";
} else {
  echo "Error al actualizar datos: " . mysqli_error($conn);
}

mysqli_close($conn);
?>