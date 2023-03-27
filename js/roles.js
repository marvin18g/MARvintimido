$(document).ready(function () {
    // Cargar los datos por defecto al cargar la página
    cargarDatos("");
  
    // Asignar el evento de búsqueda al input de búsqueda
    $("#busqueda-rol").keyup(function () {
      var termino = $(this).val();
      cargarDatos(termino);
    });
  });
  
  function cargarDatos(termino) {
    // Hacer la petición AJAX
    $.ajax({
      url: "ajax/buscar_rol.php",
      type: "GET",
      dataType: "json",
      data: { termino: termino },
      success: function (resultados) {
        // Limpiar la tabla antes de agregar los datos
        var tbody = $("#tabla-rol tbody");
        tbody.empty();
  
        // Agregar los datos a la tabla
        $.each(resultados, function (index, cliente) {
          var tr = $("<tr>");
          tr.append("<td>" + cliente.nombre + "</td>");
          tr.append("<td>" + cliente.status + "</td>");
         
          tr.append(
            "<td><button data-bs-toggle='modal' data-bs-target='#exampleModal' class='editar-cliente btn btn-success' data-id='" +
            cliente.id_roles +
            "'>Editar</button></td>"
          ); // Botón de edición
          tr.append(
            "<td><button class='eliminar-cliente btn btn-danger bi bi-x-lg' data-id='" + 
   cliente.id_roles + "'></button></td>"
          ); // Botón de eliminación
          tbody.append(tr);
        });
        // Asignar el evento de click al botón de edición
        $(".editar-cliente").click(function () {
          var idRoles = $(this).data("id");
          //************************************************************************************** */
          // Hacer la petición AJAX para obtener los datos de la mascota a editar
          $.ajax({
            url: "ajax/cargar_datosroles.php?id=" + idRoles,
            
            type: "GET",
            dataType: "json",
            success: function (cliente) {
              // Llenar los campos del formulario con los datos de la mascota a editar
              $("#nombre").val(cliente.nombre);
              $("#status").val(cliente.status);
              
  
              // Cambiar el texto del botón de submit para indicar que se está editando
              $("button[type='submit']").text("Editar");
  
              // Agregar el atributo data-id al formulario para enviar el ID de la mascota a editar
              $("#form_cliente").attr("data-id", idRoles);
            },
            error: function () {
              alert("Error al obtener los datos del cliente");
            },
          });
        });
        /************************************************************************************************* */
        // Asignar el evento de click al botón de eliminación
        $(".eliminar-cliente").click(function () {
          var idRoles = $(this).data("id");
  
          // Hacer la petición AJAX para eliminar el registro
          $.ajax({
            url: "eliminarroles.php?id=" + idRoles,
            type: "GET",
            success: function () {
              alert("Rol eliminado exitosamente");
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
  $("#form_cliente").submit(function (event) {
    event.preventDefault(); // detiene el envío del formulario
    guardarcliente(); // llama a la función para guardar la mascota
  });

        function guardarcliente() {
            var datos = $("#form_cliente").serialize(); // serializa los datos del formulario
            $.ajax({
              url: "verroles.php", // archivo PHP para procesar los datos
              type: "post",
              data: datos,
              success: function (response) {
                alert("Cliente guardado exitosamente");
                $("#form_cliente")[0].reset();
          
                // hacer algo en respuesta exitosa del servidor
                cargarDatos("");
              },
              error: function (xhr, status, error) {
                alert("Error al guardar la mascota");
                // manejar el error del servidor
              },
            });
          }
  
  