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
    $nombre = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
   
    

    // Preparar la consulta SQL INSERT con marcadores de posición
    $sql = "INSERT INTO inicio (password, email, username )
            VALUES (:password, :email, :username)";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':username', $nombre);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':email', $email);
    
    if(buscaRepetido($nombre,$password,$conexion)==1){
        echo "<script>alert('El usuario y contraseña ya existen');</script>";
        echo "<script>window.history.back();</script>";

    exit();
        
     }else{
        $sql = "INSERT INTO inicio (username, password, email)
        VALUES (:usuario, :password, :email)";
        $stmt = $conexion->prepare($sql);
     }
    
    
   

    // Ejecutar la consulta y verificar si fue exitosa
    if ($stmt->execute()) {
        echo "<script>alert('Los datos fueron guardados correctamente.'); window.location = 'index.php';</script>";
    } else {
        echo "Hubo un error al guardar los datos.";
    }
} catch(PDOException $e) {
    echo "La conexión falló: " . $e->getMessage();
}

// Cerrar la conexión con la base de datos
$conexion = null;
?>


