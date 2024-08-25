<?php
$Titulo = "Ejercicio 1";
include_once("estructura/header.php");
?>

    <!--mt-5 es para un margen superior de 5-->
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1 class="h4">Consigna</h1>
            </div>
            <div class="card-body">
                <p>Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
                    llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número
                    enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
                    respuesta, que permita volver a la página anterior.
                </p>
                <h1 class="h5">Ingrese un número</h1>

                <!--el novalidate desactiva la validaciones de html5 para probar jquery -->
                <form id="formEj1" name="formEj1" method="get" action="Action/actionEj1.php">
                    <div class="form-group">
                        <label for="numero_form">Número:</label>
                        <!-- Input para solicitar el número -->
                        <input name="numero_form" type="number" id="numero_form" class="form-control" required step="1" min="-1000000" max="1000000" />
                    </div>
                    <br />
                    <!-- Botón para enviar el formulario -->
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </form>
            </div>
        </div>

    </div>
    <div class="mt-4 p-5">
        <a href="../../Menu.php" class="btn btn-secondary">Volver al menú</a>
    </div>


    <!-- Enlace a Bootstrap-->

    <?php

    include_once("estructura/footer.php");
    ?>
</body>

</html>