
//------------------ejercicio 2 --------------------------------------------------

$(document).ready(function() {

    // cambio mensajes default
    jQuery.extend(jQuery.validator.messages, {
        required: "Debe ingresar o seleccionar un valor.",
        number: "Debe ingresar un número válido.",
        range: jQuery.validator.format("Debe ingresar un valor entre {0} y {1}."),
        sololetras: jQuery.validator.format("Sólo debe ingresar letras."),
        max: jQuery.validator.format("Ingrese un valor menor o igual a {0}."),
        min: jQuery.validator.format("Ingrese un valor mayor o igual a {0}."),
    });

    // ejercicio 1 - sólo debemos verificar que un número haya sido ingresado
    $("#formEj1").validate({
        rules: {
            numeroform: {
                required: true,
                number: true,
            },
        },
    });

    // ejercicio 2 - identico al anterior, agregando rango de valores
    $("#formEj2").validate({
        rules:{
            lunes:{
                required: true,
                number: true,
                range: [0, 24],
            },
            martes:{
                required: true,
                number: true,
                range: [0, 24],
            },
            miercoles:{
                required: true,
                number: true,
                range: [0, 24],
            },
            jueves:{
                required: true,
                number: true,
                range: [0, 24],
            },
            viernes:{
                required: true,
                number: true,
                range: [0, 24],
            },
            sabado:{
                required: true,
                number: true,
                range: [0, 24],
            },
            domingo:{
                required: true,
                number: true,
                range: [0, 24],
            },
        },
    });
    
    // ejercicio 3-6: validaciones de nombre y edad validos, campos requeridos salvo deportes

    // tenemos q agregar metodo custom con regex de letritas pq no viene incluido :v
    jQuery.validator.addMethod("sololetras", function(value, element) {
        return this.optional(element) || /^[A-Za-z\s]+$/i.test(value);
    });

    $("#formEj6").validate({
        rules:{
            nombre:{
                required: true,
                sololetras: true,
                maxlength: 40,
            },
            apellido:{
                required: true,
                sololetras: true,
                maxlength: 40,
            },
            edad:{
                required: true,
                number: true,
                min: 1,
                max: 120,
            },
            sexo:{
                required: true,
            },
            nivelEstudio:{
                required: true,
            },
        }
    });

    // ejercicio 7: sólo se verifica que se ingrese un valor numérico
    $("#formEj7").validate({
        rules:{
            numero1:{
                required: true,
                number: true,
            },
            numero2:{
                required: true,
                number: true
            }
        }
    });

    // ejercicio 8: todos los campos requeridos, edad válida
    $("#formEj8").validate({
        rules:{
            edad:{
                required: true,
                number: true,
                min: 1,
                max: 120
            },
            estudiante:{
                required: true
            }
        }
    });
});


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
            console.log("ENVIO DEL FORMULARIO"); 
            e.preventDefault();
            form.submit();
        }
    });

});
