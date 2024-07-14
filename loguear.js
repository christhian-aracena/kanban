$(document).ready(function () {
  $("form").submit(function (e) {
    e.preventDefault();
    var formData = $(this).serialize();
    $.ajax({
      type: "POST",
      url: "validar_login.php",
      data: formData,
      dataType: "json",
      success: function (response) {
        if (response.success) {
          // Si las credenciales son correctas, muestra el mensaje de éxito
          showSuccess(response.message);
          // Redirecciona a main.php después de 3 segundos
          setTimeout(function () {
            window.location.href = "inicio.php";
          }, 2000);
        } else {
          // Si las credenciales son incorrectas, muestra el mensaje de alerta
          showAlert(response.message);
        }
      },
      error: function (xhr, status, error) {
        // En caso de error en la solicitud AJAX
        alert("Hubo un error al procesar la solicitud: " + xhr.responseText);
      },
    });
  });
});

function showAlert(message) {
  var alertDiv = $(
    '<div class="alert alert-danger alert-dismissible mt-3" role="alert" style="position: fixed; font-family: Mulish; top: -100px; left: 50%; transform: translateX(-50%); transition: top 0.5s ease-in-out;">' +
      message +
      '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
      "</div>"
  );
  $("body").append(alertDiv);
  setTimeout(function () {
    alertDiv.css("top", "-0.9rem");
  }, 100);
  setTimeout(function () {
    alertDiv.css("top", "-100px");
  }, 3000);
}

function showSuccess(message) {
  var successDiv = $(
    '<div id="success-alert" class="alert alert-success mt-3" style="font-family: Mulish; position: fixed; top: -100px; left: 50%; transform: translateX(-50%); transition: top 0.5s ease-in-out;">' +
      message +
      "</div>"
  );
  $("body").append(successDiv);
  setTimeout(function () {
    successDiv.css("top", "-0.9rem");
  }, 100);
  setTimeout(function () {
    successDiv.css("top", "-100px");
  }, 3000);
}
