<?php

include ('config.php');
$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM mascotas WHERE id_mascotas = :id");

$stmt->execute(['id' => $id]);


echo "<script>alert('la mascota eliminada correctamente');
window.location ='mascotas.php';</script>";



exit;
?>


