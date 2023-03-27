<?php
session_start();
?>
<!doctype html>
<html lang="en">
<?php include('menu.php'); ?>
<?php include('config.php'); ?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="http://localhost/marvintimido/MARvintimido/estilos/wow.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Mascotas</title>
</head>

<body>
  <br>

  
  <br>
  <br><br>
    <div class="container"><br>
        <div class="row">
            <div class="col-12">
              <br>
                <div class="row justify-content-center">
                  <br>
                    <h4>Detalles Cliente</h4>
                    <hr>
                    
            <?php
                include('modal/roles.php')
                ?>

                </div>
            </div>
            <div class="col-12">


                <input class="form-control me-2" id="busqueda-rol" type="search" placeholder="Search" aria-label="Search">

                <br>
                <table id="tabla-rol" class="table table-dark table-striped" >
                    <thead>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Nuevo Registro
                </button>
                <br>
                <br>
                        <tr>
                            <th>Nombre</th>
                            <th>status</th>
                            <th>Acciones</th>
                            <th></th>

                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        <!-- aquí se llenarán los datos de la consulta -->
                    </tbody>
                </table>
                
         
            </div>


            <!-- Optional JavaScript; choose one of the two! -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="js/roles.js"></script>
            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

            <!-- Option 2: Separate Popper and Bootstrap JS -->
            <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>