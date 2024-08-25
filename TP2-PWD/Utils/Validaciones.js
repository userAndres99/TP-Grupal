
//------------------ejercicio 3 --------------------------------------------------
$(document).ready(function() {
    $('#loginForm').submit(function(event) {
        // Variable para controlar si el formulario es válido
        var valido = true;

        // Elimina mensajes de error previos
        //jQuery se utiliza para eliminar todos los elementos hijos de un elemento seleccionado en el DOM
        $('#errorMessages').empty();

        // Obtén los valores de los campos
        var usuario = $('#usuario').val().trim();
        var clave = $('#clave').val().trim();

        // Restablece los estilos de borde antes de la validación
        $('#usuario').css('border', '');
        $('#clave').css('border', '');

        // Variables para almacenar los mensajes de error
        var errores = '';

        // Validar campo usuario
        if (usuario === '') {
            errores += '<span class="error-message" style="color: red;">Por favor, complete el campo usuario.</span><br>';
            $('#usuario').css('border', '2px solid red');
            valido = false;
        } else {
            $('#usuario').css('border', '2px solid green');
        }

        // Validar campo clave
        if (clave === '') {
            errores += '<span class="error-message" style="color: red;">Por favor, complete el campo contraseña.</span><br>';
            $('#clave').css('border', '2px solid red');
            valido = false;
        } else {
            // Verificar que la contraseña tenga al menos 8 caracteres
            if (clave.length < 8) {
                errores += '<span class="error-message" style="color: red;">La contraseña debe tener al menos 8 caracteres.</span><br>';
                $('#clave').css('border', '2px solid red');
                valido = false;
            } 
            // Verificar que la contraseña no sea igual al usuario
            else if (clave === usuario) {
                errores += '<span class="error-message" style="color: red;">La contraseña no puede ser igual al nombre de usuario.</span><br>';
                $('#clave').css('border', '2px solid red');
                valido = false;
            } 
            // Verificar que la contraseña contenga letras y números
            else if (!/(?=.*[a-zA-Z])(?=.*\d)/.test(clave)) {
                errores += '<span class="error-message" style="color: red;">La contraseña debe contener letras y números.</span><br>';
                $('#clave').css('border', '2px solid red');
                valido = false;
            } else {
                $('#clave').css('border', '2px solid green');
            }
        }

        // Insertar los mensajes de error en el contenedor
        $('#errorMessages').html(errores);

        // Si el formulario no es válido, prevenir el envío
        if (!valido) {
            event.preventDefault();
        }
    });
});

//-------------------- ejercicio 4 --------------------
$(document).ready(function() {
    $("#cineform").validate({
        rules: {
            titulo: {
                required: true
            },
            actores: {
                required: true
            },
            director: {
                required: true
            },
            guion: {
                required: true
            },
            produccion: {
                required: true
            },
            año: {
                required: true,
                number: true,
                maxlength: 4
            },
            nacionalidad: {
                required: true
            },
            genero: {
                required: true
            },
            duracion: {
                required: true,
                number: true,
                maxlength: 3
            },
            restricciones: {
                required: true
            },
            sinopsis: {
                required: true
            }
        },

        messages: {
            titulo: {
                required: "Debe ingresar un título"
            },
            actores: {
                required: "Debe ingresar al menos un actor"
            },
            director: {
                required: "Debe ingresar un director"
            },
            guion: {
                required: "Debe ingresar el nombre del guionista"
            },
            produccion: {
                required: "Debe ingresar el nombre de la productora"
            },
            año: {
                required: "Debe ingresar el año de lanzamiento",
                number: "Debe ingresar un número",
                maxlength: "Debe ingresar hasta 4 caracteres"
            },
            nacionalidad: {
                required: "Debe ingresar la nacionalidad"
            },
            genero: {
                required: "Debe indicar un género"
            },
            duracion: {
                required: "Debe indicar la duración",
                number: "Debe ingresar un número",
                maxlength: "Debe ingresar hasta 3 caracteres"
            },
            restricciones: {
                required: "Debe indicar las restricciones etarias"
            },
            sinopsis: {
                required: "Debe ingresar una sinopsis"
            }
        },

        submitHandler: function(form, e) {
            console.log("ENVIO DEL FORMULARIO"); //ESTO NO LO MUESTRA EN CONSOLA.
            e.preventDefault();
            form.submit();
        }
    });
});
