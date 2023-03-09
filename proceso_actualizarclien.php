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
    $telefono = $_POST['telefono'];
    $dui = $_POST['dui'];
    $direccion = $_POST['direccion'];
    $email = $_POST['email'];
    $estatus = $_POST['status'];

    // Preparar la consulta SQL INSERT con marcadores de posición
    $sql = "UPDATE cliente SET nombre = :nombre, telefono = :telefono, dui = :dui, direccion = :direccion, email = :email, status = :status WHERE id_cliente = :id";
            
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(":nombre", $nombre);
    $stmt->bindParam(":telefono", $telefono);
    $stmt->bindParam(":dui", $dui);
    $stmt->bindParam(":direccion", $direccion);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":status", $estatus);
    $stmt->bindParam(":id", $id);

    // Ejecutar la consulta y verificar si fue exitosa
    if ($stmt->execute()) {
        header("Location: cliente.php");
    } else {
        print "Hubo un error al guardar los datos.";
    }
} catch(PDOException $e) {
    echo "La conexión falló: " . $e->getMessage();
}

// Cerrar la conexión con la base de datos
$conexion = null;
?>


