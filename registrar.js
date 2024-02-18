$(document).ready(function(){
    // Mostrar el modal dinámico
    function mostrarModal(mensaje) {
        $('#modal-message').text(mensaje);
        $('#custom-modal').fadeIn();

        // Cerrar el modal al hacer clic fuera de él
        $(document).on('click', function(e) {
            if ($(e.target).is('#custom-modal')) {
                $('#custom-modal').fadeOut();
            }
        });
    }

    // Cerrar el modal al hacer clic en la "x"
    $('#close-modal').click(function() {
        $('#custom-modal').fadeOut();
    });

    $('#register-form').submit(function(e){
        e.preventDefault();

        // Validar que las contraseñas coincidan y continuar con la solicitud AJAX

        var password = $('#password').val();
        var repetir = $('#repetir').val();

        if (password !== repetir) {
            alert('Las contraseñas no coinciden. Por favor, verifica.');
            return;
        }

        var formData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: 'guardar_usuario.php',
            data: formData,
            success: function(response){
                // Mostrar el mensaje en el modal
                mostrarModal('¡Registro exitoso! Tu cuenta ha sido creada exitosamente.');
                // Restaurar el formulario u otras acciones si es necesario
                $('#register-form')[0].reset();
            },
            error: function(){
                alert('Hubo un error al procesar la solicitud.');
            }
        });
    });
});
