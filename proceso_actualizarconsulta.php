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
    $examen = $_POST['examen_fisico'];
    $diagnostico = $_POST['diagnostico'];
    $medicamento = $_POST['medicamento'];
    $cita = $_POST['proxima_cita'];
    $costo = $_POST['costo'];

    // Preparar la consulta SQL INSERT con marcadores de posición
    $sql = "UPDATE consultas SET examen_fisico = :examen_fisico, diagnostico = :diagnostico, medicamento = :medicamento, proxima_cita = :proxima_cita, costo = :costo WHERE id_consulta = :id";
            
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(":examen_fisico", $examen);
    $stmt->bindParam(":diagnostico", $diagnostico);
    $stmt->bindParam(":medicamento", $medicamento);
    $stmt->bindParam(":proxima_cita", $cita);
    $stmt->bindParam(":costo", $costo);
    $stmt->bindParam(":id", $id);

    // Ejecutar la consulta y verificar si fue exitosa
    if ($stmt->execute()) {
        header("Location: consultas.php");
    } else {
        print "Hubo un error al guardar los datos.";
    }
} catch(PDOException $e) {
    echo "La conexión falló: " . $e->getMessage();
}

// Cerrar la conexión con la base de datos
$conexion = null;
?>


