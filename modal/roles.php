<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo Registro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
        <form class="mx-auto" method="post" id="form_cliente">
            <div class="actual-form">
                            <div class="mb-3">
                            <label>Name</label>
                                <input type="text" input name="nombre" id="nombre" class="form-control" autocomplete="off" required  />
      
                            </div>
                            <div class="form-group">
                            <h6>Status</h6>
				
				<select class="form-control" name="status">
					<option value="1">1</option>
					<option value="0">0</option>
				</select>
			</div>
                
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            </form>
        </div>
    </div>
</div>
