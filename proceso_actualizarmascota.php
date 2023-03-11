<?php
// Establecer la conexión con la base de datos
$host = "localhost";
$usuario = "root";
$password = "";
$base_de_datos = "veterinariaa";

try {
    $conexion = new PDO("mysql:host=$host;dbname=$base_de_datos", $usuario, $password);
    // Manejar errores de PDO en modo de excepción
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Obtener los valores del formulario
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $raza = $_POST['raza'];
    $color = $_POST['color'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $sexo = $_POST['sexo'];
    $fecha_nac = $_POST['fecha_nac'];
    

    // Preparar la consulta SQL INSERT con marcadores de posición
    $sql = "UPDATE mascotas SET nombre = :nombre, raza = :raza, color = :color, peso = :peso, altura = :altura, sexo = :sexo, fecha_nac =:fecha_nac WHERE id_mascotas = :id";
            
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(":nombre", $nombre);
    $stmt->bindParam(":raza", $raza);
    $stmt->bindParam(":color", $color);
    $stmt->bindParam(":peso", $peso);
    $stmt->bindParam(":altura", $altura);
    $stmt->bindParam(":sexo", $sexo);
    $stmt->bindParam(":fecha_nac", $fecha_nac);
    $stmt->bindParam(":id", $id);

    // Ejecutar la consulta y verificar si fue exitosa
    if ($stmt->execute()) {
        header("Location: mascotas.php");
    } else {
        print "Hubo un error al guardar los datos.";
    }
} catch(PDOException $e) {
    echo "La conexión falló: " . $e->getMessage();
}

// Cerrar la conexión con la base de datos
$conexion = null;
?>


