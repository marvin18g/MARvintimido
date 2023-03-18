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
            "<td><button class='editar-cliente btn btn-success bi bi-pencil-square' data-id='" +
              cliente.id_usuario +"'></button></td>"
          ); // Botón de edición
          tr.append(
            "<td><button class='eliminar-cliente btn btn-danger bi bi-x-lg' data-id='" + 
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
              url: "verusuario.php", // archivo PHP para procesar los datos
              type: "post",
              data: datos,
              success: function (response) {
                alert("Cliente guardado exitosamente");
                $("#form_usuario")[0].reset();
          
                // hacer algo en respuesta exitosa del servidor
                cargarDatos("");
              },
              error: function (xhr, status, error) {
                alert("Error al guardar la mascota");
                // manejar el error del servidor
              },
            });
          }
  
  