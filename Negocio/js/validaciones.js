        function mostrarContrasenia() {
            var contraseniaInput = document.getElementById("password");
            var repetir = document.getElementById("repetir");
            var checkbox = document.getElementById("mostrar-contrasenia");

            if (checkbox.checked) {
                contraseniaInput.type = "text";
                repetir.type = "text";
            } else {
                contraseniaInput.type = "password";
                repetir.type = "password";
            }
        }

        