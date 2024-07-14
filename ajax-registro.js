$(document).ready(function() {
    $('#register-form').on('submit', function(event) {
        event.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            url: 'check_email.php',
            type: 'POST',
            data: formData,
            dataType: 'json',
            success: function(response) {
                if (response.exists) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error de cuenta:',
                        text: 'La cuenta que intentas crear ya existe.',
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
                    // Aquí puedes proceder con el registro
                    $.ajax({
                        url: 'guardar_usuario.php', // El archivo PHP que maneja el registro
                        type: 'POST',
                        data: formData,
                        success: function(data) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Registro exitoso',
                                text: 'Tu cuenta ha sido creada exitosamente.',
                                customClass: {
                                    title: 'swal2-title',
                                    content: 'swal2-text',
                                    footer: 'swal2-footer',
                                    confirmButton: 'my-confirm-button'
                                },
                                buttonsStyling: false,
                                confirmButtonText: 'Aceptar'
                            }).then(() => {
                                window.location.href = 'login.php'; // Redirigir al login o donde desees
                            });
                        }
                    });
                }
            }
        });
    });
});