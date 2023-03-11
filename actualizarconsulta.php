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
                $sql = "SELECT * FROM consultas WHERE id_consulta = '$id'";
                
                $stmt = $conexion->prepare($sql);
               
                $stmt->execute();
                $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

                // Recorrer los resultados de la consulta y mostrarlos en una tabla HTML
                foreach ($resultados as $row) {
                    echo "<tr>";
                    echo "<td>" . $row['id_consulta'] . "</td>";
                    echo "<td>" . $row['examen_fisico'] . "</td>";
                    echo "<td>" . $row['diagnostico'] . "</td>";
                    echo "<td>" . $row['medicamento'] . "</td>";
                    echo "<td>" . $row['proxima_cita'] . "</td>";
                    echo "<td>" . $row['costo'] . "</td>";
                   
                    
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
 

    <link rel="stylesheet" href="http://localhost/marvintimido/MARvintimido/estilos/estilos2.css" />
    
</head>

<body>
<?php


include ("menu.php");


?>

    <main>
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <form action="proceso_actualizarconsulta.php" method="post" autocomplete="off" class="sign-in-form">
                        <div class="logo">
                            <img src="./img/logo.png" alt="easyclass" />
                            <h4>Marvin Galeano</h4>
                            
                        </div>

                        <div class="heading">
                            <h2>Mascotas</h2>
                            
                            <h6>Aun no estas registrado?</h6>
                            <a href="#" class="toggle">Sign up</a>
                        </div>

                        <div class="actual-form">
                            <div class="input-wrap">
                            <input type="hidden" name="id" value="<?= $row['id_consulta']?>"/>
                                <input type="text"  name="examen_fisico" id="examen_fisico" class="input-field" autocomplete="off" required value="<?= $row['examen_fisico']?>" />
                                <label>Examen Fisico</label>

                                
                            </div>

                            <div class="input-wrap">
                                <input type="text"  name="diagnostico" id="diagnostico" class="input-field" autocomplete="off" required value="<?= $row['diagnostico']?>" />
                                <label>Diagnostico</label>

                                
                            </div>

                            <div class="input-wrap">
                                <input type="text"  name="medicamento" id="medicamento" class="input-field" autocomplete="off" required  value="<?= $row['medicamento']?>"/>
                                <label>Medicamento</label>

                                
                            </div>

                            <div class="input-wrap">
                                <input type="date"  name="proxima_cita" id="proxima_cita" class="input-field" autocomplete="off" required value="<?= $row['proxima_cita']?>" />
                                <label>Fecha de cita</label>

                                
                            </div>

                            <div class="input-wrap">
                                <input type="text"  name="costo" id="costo" class="input-field" autocomplete="off" required value="<?= $row['costo']?>" />
                                <label>Costos</label>

                                
                            </div>

                
            <div class="col-15">
  <div class="input-group mb-3">
    <small class="input-group-text"><i class="fa-solid fa-adress-book"></i></small>
    <select name="id_mascotas" id="id_mascotas" class="form-select" aria-label="Default select example" require>

    <option selected><label for="floatingInputGroup1">--Id Mascota--</label></option>

    
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
$consulta = "SELECT * FROM mascotas";
$resultado = $conexion->query($consulta);


while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {

    echo "<option value='" . $fila['id_mascotas'] . "'>" . $fila['nombre'] . "</option>";
}
echo "</select>";

//Cierre de la conexión a la base de datos
$conexion = null;
?>


</select>
  </div>
</div>

<div class="col-15">
  <div class="input-group mb-3">
    <small class="input-group-text"><i class="fa-solid fa-adress-book"></i></small>
    <select name="id_usuario" id="id_usuario" class="form-select" aria-label="Default select example" require>

    <option selected><label for="floatingInputGroup1">--Id Usuario--</label></option>

    
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
$consulta = "SELECT * FROM usuarios";
$resultado = $conexion->query($consulta);


while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {

    echo "<option value='" . $fila['id_usuario'] . "'>" . $fila['usuario'] . "</option>";
}
echo "</select>";

//Cierre de la conexión a la base de datos
$conexion = null;
?>


</select>
  </div>
</div>

                            <input type="submit" value="Actualizar" class="sign-btn" />
                           
                           

                            <p class="text">
                                Forgotten your password or you login datails?
                                <a href="#">Get help</a> signing in
                            </p>
                        </div>
                    </form>

                    <form action="proceso_actualizarconsulta.php" method="post" autocomplete="off" class="sign-up-form">
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
                        <img src="./img/beauti.jpg" class="image img-1 show" alt="" />
                        <img src="./img/qs.jpg" class="image img-2" alt="" />
                        <img src="./img/qs2.jpg" class="image img-3" alt="" />
                        
                    </div>

                    <div class="text-slider">
                        <div class="text-wrap">
                            <div class="text-group">
                                <h2>Creador por @MarvinGaleano</h2>
                                <h2>Veterinaria Marvin | SV</h2>
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