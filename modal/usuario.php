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
                            <label for="direccion" class="form-label">Roles:</label>
                            <input type="text" class="form-control" id="id_roles" name="id_roles">
                        </div>
                    
                        <div class="mb-3">
                            <label for="sexo" class="form-label">status:</label>
                            <select class="form-select" id="status" name="status">
                                <option value="1">1</option>
                                <option value="0">0</option>
                            </select>
                        </div>
                        
                        
                    
                        
                        
                   


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            </form>
        </div>
    </div>
</div>