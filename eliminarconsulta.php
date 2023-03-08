<?php

include ('config.php');
$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM consultas WHERE id_consulta = :id");

$stmt->execute(['id' => $id]);


echo "<script>alert('La consulta ha sido eliminada correctamente');
window.location ='consultas.php';</script>";



exit;
?>
