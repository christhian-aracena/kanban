$(document).ready(function() {
  $('#register-form').submit(function(e) {
      e.preventDefault();

      // Validar que las contraseñas coincidan
      var password = $('#password').val();
      var repetir = $('#repetir').val();

      if (password !== repetir) {
          Swal.fire({
              icon: "error",
              title: "Error de contraseñas",
              text: "Las contraseñas no coinciden!",
              customClass: {
                title: 'swal2-title',
                content: 'swal2-text',
                footer: 'swal2-footer',
                confirmButton: 'my-confirm-button'
              },
              buttonsStyling: false,
              confirmButtonText: 'Aceptar'
          });
          return;
      }

      // Validar si el correo ya existe
      var correo = $('#correo').val();
      $.ajax({
          type: 'POST',
          url: 'check_email.php',
          data: {correo: correo},
          dataType: 'json',
          success: function(response) {
              if (response.exists) {
                  Swal.fire({
                      icon: "warning",
                      title: "Error de cuenta:",
                      text: "La cuenta que intentas crear ya existe.",
                      footer: '<a href="#">¿Olvidaste tu contraseña?</a>',
                      customClass: {
                        title: 'swal2-title',
                        content: 'swal2-text',
                        footer: 'swal2-footer',
                        confirmButton: 'my-confirm-button'
                      },
                      buttonsStyling: false,
                      confirmButtonText: 'Aceptar'
                  });
              } else {
                  // Si el correo no existe, proceder con el registro
                  var formData = $('#register-form').serialize();
                  $.ajax({
                      type: 'POST',
                      url: 'guardar_usuario.php',
                      data: formData,
                      success: function(response) {
                          Swal.fire({
                              icon: "success",
                              title: "Cuenta creada con éxito",
                              text: "Ya puedes iniciar sesión!",
                              customClass: {
                                title: 'swal2-title',
                                content: 'swal2-text',
                                footer: 'swal2-footer',
                                confirmButton: 'my-confirm-button'
                              },
                              buttonsStyling: false,
                              confirmButtonText: 'Aceptar'
                          });
                          $('#register-form')[0].reset();
                      },
                      error: function() {
                          alert('Hubo un error al procesar la solicitud.');
                      }
                  });
              }
          }
      });
  });
});