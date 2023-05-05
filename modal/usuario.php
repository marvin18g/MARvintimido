<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo Registro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form class="mx-auto" method="post" id="form_usuario">
            <div class="mb-3">
                            
                            
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Usuario:</label>
                            <input type="text" class="form-control" id="usuario" name="usuario">
                        </div>
                        <div class="mb-3">
                            <label for="raza" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="color" class="form-label">email:</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="direccion" class="form-label">Telefono:</label>
                            <input type="text" class="form-control" id="telefono" name="telefono">
                        </div>

                        
                    
                        <div class="mb-3">
                            <label for="sexo" class="form-label">status:</label>
                            <select class="form-select" id="status" name="status">
                                <option value="1">1</option>
                                <option value="0">0</option>
                            </select>
                        </div>
                        
                        
                  
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit"  class="btn btn-primary">Guardar</button>
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
                        
                        
                   


            </div>   
            </form>
           
        </div>

    </div>
</div>



