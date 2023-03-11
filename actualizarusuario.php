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
                $id = $_GET["id"];
            

                // Realizar la consulta SELECT a la base de datos
                $sql = "SELECT * FROM usuarios WHERE id_usuario = '$id'";
                
                $stmt = $conexion->prepare($sql);
               
                $stmt->execute();
                $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

                // Recorrer los resultados de la consulta y mostrarlos en una tabla HTML
                foreach ($resultados as $row) {
                    echo "<tr>";
                    echo "<td>" . $row['id_usuario'] . "</td>";
                    echo "<td>" . $row['usuario'] . "</td>";
                    echo "<td>" . $row['password'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['telefono'] . "</td>";
                    echo "<td>" . $row['status'] . "</td>";
                    
                }
            
                }
             catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            // Cerrar la conexión con la base de datos
            $conexion = null;
            ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in & Sign up Form</title>
    <link rel="stylesheet" href="http://localhost/marvintimido/MARvintimido/estilos/estilos1.css" />

    
</head>

<body>
<?php


include ("menu.php");


?>

    <main>
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <form action="proceso_actualizarusuario.php" method="post" autocomplete="off" class="sign-in-form">
                        <div class="logo">
                            <img src="./img/coffee.png" alt="easyclass" />
                            <h4>Marvin Galeano</h4>
                            
                        </div>

                        <div class="heading">
                            <h2>Roles</h2>
                            
                            <h6>Aun no estas registrado?</h6>
                            <a href="#" class="toggle">Sign up</a>
                        </div>

                        <div class="actual-form">
                            <div class="input-wrap">
                            <input type="hidden" name="id" value="<?= $row['id_usuario']?>"/>
                                <input type="text" name="usuario" id="usuario" class="input-field" autocomplete="off" required value="<?= $row['usuario']?>" />
                                <label>Usuario</label>
                            </div>

                            <div class="input-wrap">
                                <input type="password" name="password" id="password" class="input-field" autocomplete="off" required value="<?= $row['password']?>" />
                                <label>Password</label>
                            </div>
                            <div class="input-wrap">
                                <input type="text" name="email" id="email" class="input-field" autocomplete="off" required value="<?= $row['email']?>" />
                                <label>Email</label>
                            </div>

                            <div class="input-wrap">
                                <input type="text" name="telefono" id="telefono" class="input-field" autocomplete="off" required value="<?= $row['telefono']?>" />
                                <label>Telefono</label>
                            </div>
                            <div class="form-group">
                            <h6>Status</h6>
				
				<select class="form-control" name="status" value="<?= $row['status']?>">
					<option value="1">1</option>
					<option value="0">0</option>
				</select>
			</div>

                
            <div class="col-15">
  <div class="input-group mb-3">
    <small class="input-group-text"><i class="fa-solid fa-adress-book"></i></small>
    <select name="id_roles" id="id_roles" class="form-select" aria-label="Default select example" require>

    <option selected><label for="floatingInputGroup1">--Nombre rol--</label></option>

    
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

//Consulta para obtener los datos de la tabla clientes
$consulta = "SELECT * FROM roles";
$resultado = $conexion->query($consulta);


while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {

    echo "<option value='" . $fila['id_roles'] . "'>" . $fila['nombre'] . "</option>";
}
echo "</select>";

//Cierre de la conexión a la base de datos
$conexion = null;
?>
                    
                    </div>
           
        </div>
    </div>
            
                            <input type="submit" value="Actualizar" class="sign-btn" />
                     

                            <p class="text">
                                Forgotten your password or you login datails?
                                <a href="#">Get help</a> signing in
                            </p>
                            
                        </div>
                        
                        
                    </form>
                   

                    <form action="proceso_actualizarusuario.php" method="post" autocomplete="off" class="sign-up-form">
                        <div class="logo">
                            <img src="./img/logo.png" alt="easyclass" />
                            <h4>easyclass</h4>
                        </div>

                        <div class="heading">
                            <h2>Get Started</h2>
                            <h6>Already have an account?</h6>
                            <a href="#" class="toggle">Sign in</a>
                        </div>

                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="text" minlength="4" class="input-field" autocomplete="off" required />
                                <label>Name</label>
                            </div>

                            <div class="input-wrap">
                                <input name="username" id="username" type="email" class="input-field" autocomplete="off"
                                    required />

                                <label>Email</label>
                            </div>

                            <div class="input-wrap">
                                <input type="password"  class="input-field" required
                                name="password"  id="password"/>
                                <label>Password</label>
                            </div>

                            <input type="submit" value="Sign Up" class="sign-btn" />

                            <p class="text">
                                By signing up, I agree to the
                                <a href="#">Terms of Services</a> and
                                <a href="#">Privacy Policy</a>
                            </p>
                        </div>
                    </form>
                </div>
                

                <div class="carousel">
                    <div class="images-wrapper">
                        <img src="./img/214603.webp" class="image img-1 show" alt="" />
                        <img src="./img/enfemera.jpg" class="image img-2" alt="" />
                        <img src="./img/crea.jpg" class="image img-3" alt="" />
                        
                    </div>

                    <div class="text-slider">
                        <div class="text-wrap">
                            <div class="text-group">
                                <h2>Creador por @MarvinGaleano</h2>
                                <h2>Vaterinaria Marvin | SV</h2>
                               
                            </div>
                        </div>

                        <div class="bullets">
                            <span class="active" data-value="1"></span>
                            <span data-value="2"></span>
                            <span data-value="3"></span>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 <script src="estilos/app.js"></script>
 <script src="http://localhost/MARVINVETERINARIA/estilos/script.js"></script>
</body>

</html>