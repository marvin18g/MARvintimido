<?php
include('../config.php');
// Verificar que se ha recibido el ID de la mascota
if (!isset($_GET['id'])) {
    die('No se ha recibido el ID del cliente');
}

$idUsuario = $_GET['id'];

// Preparar la consulta SQL para obtener los datos de la mascota
$consulta = $pdo->prepare('SELECT * FROM roles WHERE id_roles = :id');

// Asignar el valor del parámetro :id_mascota
$consulta->bindParam(':id', $idUsuario, PDO::PARAM_INT);

// Ejecutar la consulta
$consulta->execute();

// Obtener los resultados
$usuario = $consulta->fetch(PDO::FETCH_ASSOC);

// Devolver los datos de la mascota como JSON
echo json_encode($usuario);