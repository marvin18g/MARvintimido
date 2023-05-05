<?php
//Conexión a la base de datos
$dsn = "mysql:host=localhost;dbname=veterinariaa";
$usuario = "root";
$contrasena = "";
try {
    $conexion = new PDO($dsn, $usuario, $contrasena);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error al conectarse a la base de datos: " . $e->getMessage();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Recuperar los datos del formulario
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $status = $_POST['status'];
    $id_roles = $_POST['id_roles'];
    
    //Actualizar los datos en la base de datos
    $consulta = "UPDATE usuarios SET usuario = :usuario, password = :password, email = :email, telefono = :telefono, status = :status, id_roles = :id_roles WHERE id_usuario = :id_usuario";
    $statement = $conexion->prepare($consulta);
    $statement->bindParam(':usuario', $usuario);
    $statement->bindParam(':password', $password);
    $statement->bindParam(':email', $email);
    $statement->bindParam(':telefono', $telefono);
    $statement->bindParam(':status', $status);
    $statement->bindParam(':id_roles', $id_roles);
    $statement->bindParam(':id_usuario', $_POST['id_usuario']);
    $statement->execute();
    
    //Cerrar la conexión a la base de datos
    $conexion = null;
}
