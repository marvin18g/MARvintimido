$(document).ready(function () {
    // Cargar los datos por defecto al cargar la página
    cargarDatos("");
  
    // Asignar el evento de búsqueda al input de búsqueda
    $("#busqueda-cliente").keyup(function () {
      var termino = $(this).val();
      cargarDatos(termino);
    });
  });
  
  function cargarDatos(termino) {
    // Hacer la petición AJAX
    $.ajax({
      url: "ajax/buscar_usuario.php",
      type: "GET",
      dataType: "json",
      data: { termino: termino },
      success: function (resultados) {
        // Limpiar la tabla antes de agregar los datos
        var tbody = $("#tabla-usuario tbody");
        tbody.empty();
  
        // Agregar los datos a la tabla
        $.each(resultados, function (index, cliente) {
          var tr = $("<tr>");
          tr.append("<td>" + cliente.usuario + "</td>");
          tr.append("<td>" + cliente.password + "</td>");
          tr.append("<td>" + cliente.email + "</td>");
          tr.append("<td>" + cliente.telefono + "</td>");
          tr.append("<td>" + cliente.status + "</td>");
          tr.append("<td>" + cliente.id_roles + "</td>");
         
          tr.append(
            "<td><button data-bs-toggle='modal' data-bs-target='#exampleModal' class='editar-cliente btn btn-success' data-id='" +
            cliente.id_usuario + "'>Editar</button></td>"
          ); // Botón de edición
          tr.append(
            "<td><button class='eliminar-cliente btn btn-danger bi bi-x-lg'  data-id='" + 
   cliente.id_usuario + "'></button></td>"
          ); // Botón de eliminación
          tbody.append(tr);
        });
        // Asignar el evento de click al botón de edición
        $(".editar-cliente").click(function () {
          var idCliente = $(this).data("id");
          //************************************************************************************** */
          // Hacer la petición AJAX para obtener los datos de la mascota a editar
          $.ajax({
            url: "ajax/cargar_datosusuario.php?id=" + idCliente,
            
            type: "GET",
            dataType: "json",
            success: function (cliente) {
              // Llenar los campos del formulario con los datos de la mascota a editar
              $("#usuario").val(cliente.usuario);
              $("#password").val(cliente.password);
              $("#email").val(cliente.email);
              $("#telefono").val(cliente.telefono);
              $("#status").val(cliente.status);
              $("#id_roles").val(cliente.id_roles);
              
  
              // Cambiar el texto del botón de submit para indicar que se está editando
              $("button[type='submit']").text("Editar");
  
              // Agregar el atributo data-id al formulario para enviar el ID de la mascota a editar
              $("#form_usuario").attr("data-id", idCliente);
            },
            error: function () {
              alert("Error al obtener los datos del cliente");
            },
          });
        });
        /************************************************************************************************* */
        // Asignar el evento de click al botón de eliminación
        $(".eliminar-cliente").click(function () {
          var idCliente = $(this).data("id");
  
          // Hacer la petición AJAX para eliminar el registro
          $.ajax({
            url: "eliminarusuario.php?id=" + idCliente,
            type: "GET",
            success: function () {
              alert("Cliente eliminado exitosamente");
              // Recargar la tabla de mascotas para mostrar los cambios
              cargarDatos("");
            },
            error: function () {
              alert("Error al eliminar el cliente");
            },
          });
        });
      },
      error: function () {
        alert("Error al cargar los datos");
      },
    });
  }
  $("#form_usuario").submit(function (event) {
    event.preventDefault(); // detiene el envío del formulario
    guardarcliente(); // llama a la función para guardar la mascota
  });

        function guardarcliente() {
            var datos = $("#form_usuario").serialize(); // serializa los datos del formulario
            $.ajax({
              type:"POST",
              url:"verusuario.php",
              data:datos,
              success:function(r){
  
                if(r==2){
                  alertify.alert("Este usuario ya existe, prueba con otro :)");
                }
                else if(r==1){
                  $('#form_usuario')[0].reset();
                  alertify.success("Agregado con exito");
                }else{
                  alertify.error("Fallo al agregar");
                }
              }
            });
          }
          
        $(document).ready(function() {
          // Manejador de eventos para el evento submit del formulario
          $('#form_usuario').submit(function(event) {
            // Prevenir la acción por defecto del formulario (enviar los datos por POST)
            event.preventDefault();
        
            // Obtener los datos del formulario
            var usuario = $('#usuario').val();
            var password = $('#password').val();
            var email = $('#email').val();
            var telefono = $('#telefono').val();
            var status = $('#status').val();
            var id_roles = $('#id_roles').val();
        
            // Realizar la petición AJAX
            $.ajax({
              url: 'actualizarusuario.php',
              type: 'POST',
              data: {
                usuario: usuario,
                password: password,
                email: email,
                telefono: telefono,
                status: status,
                id_roles: id_roles
              },
              success: function(response) {
                // Actualizar la tabla de usuarios
                cargarDatos('');
        
                // Cerrar el modal
                $('#exampleModal').modal('hide');
        
                // Mostrar un mensaje de éxito
                alert('El usuario se ha guardado correctamente');
              },
              error: function(xhr, status, error) {
                // Mostrar un mensaje de error
                alert('Ha ocurrido un error al guardar el usuario');
              }
            });
          });
        });
        
        