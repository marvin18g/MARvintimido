<?php
// Definir la información de la conexión
$host = 'localhost';
$dbname = 'veterinariaa';
$user = 'root';
$password = '';

// Crear una instancia de la clase PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
} catch (PDOException $e) {
    die('Error de conexión: ' . $e->getMessage());
}

// Validar la conexión
$status = $pdo->getAttribute(PDO::ATTR_CONNECTION_STATUS);
if ($status === false) {
    die('Error de conexión');
}

//echo 'Conexión exitosa: ' . $status;

// Obtener el término de búsqueda enviado desde la petición AJAX
$termino = $_GET["termino"];

// Hacer la consulta
$sql = "SELECT * FROM usuarios WHERE usuario LIKE :termino OR email LIKE :termino OR telefono LIKE :termino";
$stmt = $pdo->prepare($sql);
$stmt->execute(["termino" => "%$termino%"]);
$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Devolver los resultados en formato JSON
header('Content-Type: application/json');
echo json_encode($resultados);
