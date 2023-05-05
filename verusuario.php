<?php
// Función para buscar usuarios repetidos
function buscaRepetido($nombre, $password, $conexion) {
    $sql = "SELECT * FROM usuarios WHERE usuario = :nombre AND password = :password";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        return 1;
        
    } else {
        return 0;
    }
}



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
    $nombre = $_POST['usuario'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $estatus = $_POST['status'];
    $rol = $_POST['id_roles'];
    $token = md5($_POST["usuario"]."+".$_POST["email"]);
 
     if(buscaRepetido($nombre,$password,$conexion)==1){
        echo "<script>alert('El usuario y contraseña ya existen');</script>";
        echo "<script>window.history.back();</script>";

    exit();
        
     }else{
        $sql = "INSERT INTO usuarios (token, usuario, password, email, telefono, status, id_roles)
        VALUES (:token, :usuario, :password, :email, :telefono, :status , :id_roles)";
        $stmt = $conexion->prepare($sql);
     }

    if(preg_match("/^[a -ZA-zAÑáéíóúÁÉÍOÚ]+$/", $_POST["usuario"])){

    // Preparar la consulta SQL INSERT con marcadores de posición
    $sql = "INSERT INTO usuarios (token, usuario, password, email, telefono, status, id_roles)
            VALUES (:token, :usuario, :password, :email, :telefono, :status , :id_roles)";



    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':usuario', $nombre);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':telefono', $telefono);
    $stmt->bindParam(':status', $estatus);
    $stmt->bindParam(':id_roles', $rol);
    $stmt->bindParam(':token', $token);
    
    
    }
    else{
        echo "<script>alert('no se permiten caracteres especiales'); window.history.back();</script>";
    }


    // Ejecutar la consulta y verificar si fue exitosa
    if ($stmt->execute()) {
        echo "<script>alert('Los datos fueron guardados correctamente.'); window.location = 'usuario.php';</script>";
    } else {
        echo "Hubo un error al guardar los datos.";
    }




} catch(PDOException $e) {
    echo "La conexión falló: " . $e->getMessage();
}

// Cerrar la conexión con la base de datos
$conexion = null;
?>


