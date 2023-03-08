<?php

include ('config.php');
$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM roles WHERE id_roles = :id");

$stmt->execute(['id' => $id]);


echo "<script>alert('El rol ha sido eliminado correctamente');
window.location ='roles.php';</script>";



exit;
?>


