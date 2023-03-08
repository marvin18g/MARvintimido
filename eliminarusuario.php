<?php

include ('config.php');
$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM usuarios WHERE id_usuario = :id");

$stmt->execute(['id' => $id]);


echo "<script>alert('El usuario ha sido eliminado correctamente');
window.location ='usuario.php';</script>";



exit;
?>


