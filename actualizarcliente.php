<?php
// Recibimos el ID del cliente a actualizar
$id = $_GET['id'];

// Recibimos los datos del formulario anterior
$nombre = $_POST["nombre"];
$direccion = $_POST["direccion"];
$dui = $_POST["dui"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$estatus = $_POST["estatus"];


$sql = "UPDATE clientes SET nombre='$nombre', direccion='$direccion', dui='$dui', telefono='$telefono', email='$email', estatus='$estatus' WHERE id_cliente='$id_cliente'";

?>


<!DOCTYPE html>
<html lang="pt-br">



<head>
    <meta charset="UTF-8">
    <title>Bootstrap demo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="http://localhost/MARVINVETERINARIA/VETERINARIAMARVIN2023/estilos/styles.css" />
    <title>Formulário</title>
</head>

<body>

    
<?php


include ("menu.php");


?>
    <div class="container">
        <div class="form-image">
            <img src="img/gi.png" alt="">
        </div>
        <div class="form">
            <form action="vercliente.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Cliente</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="#"></a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Nombre</label>
                        <input id="firstname" type="text" name="nombre" placeholder="Digite su nombre" value= $nombre  required>
                    </div>

                    <div class="input-box">
                        <label for="direcion">Direccion</label>
                        <input id="direccion" type="text" name="direccion" placeholder="Digite su direccion" required>
                    </div>
                    <div class="input-box">
                        <label for="email">Dui</label>
                        <input id="dui" type="text" name="dui" placeholder="Digite su dui" required>
                    </div>

                    <div class="input-box">
                        <label for="number">Telefono</label>
                        <input id="telefono" type="tel" name="telefono" placeholder="(xx) xxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Email</label>
                        <input id="email" type="email" name="email" placeholder="Digite su email" required>
                    </div>


                </div>

                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Status</h6>
                    </div>

                    <div class="form-group">
				<label for="status">Estatus:</label>
				<select class="form-control" name="status">
					<option value="1">1</option>
					<option value="2">2</option>
				</select>
			</div>

            <br>

           
   
			<button type="submit" class="btn btn-primary"onclick="window.location.href='actualizarcliente.php'" id="myModal">Actualizar</button>