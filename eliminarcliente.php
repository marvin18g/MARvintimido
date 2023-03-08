<?php

include ('config.php');
$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM cliente WHERE id_cliente = :id");

$stmt->execute(['id' => $id]);


echo "<script>alert('El cliente ha sido eliminado correctamente');
window.location ='cliente.php';</script>";



exit;
?>


