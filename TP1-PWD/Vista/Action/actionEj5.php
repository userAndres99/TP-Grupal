<?php
include_once("../estructura/header.php");
include_once "../../Utils/funciones.php";
include_once "../../Control/verdatos.php";


// Obtener los datos enviados
$datos = darDatosSubmitted();

// Crear instancia del objeto DatosControl
$control = new Datos();

// Procesar los datos
$mensajeEdad = $control->procesarEdad($datos); // Método para verificar edad
$nivelEstudios = $control->obtenerNivelEstudio($datos); // Método para obtener nivel de estudios
$sexo = $control->obtenerSexo($datos); // Método para obtener sexo

// Construir el mensaje final
$mensajeFinal = "Hola, " . $datos['nombre'] . " " . $datos['apellido'] . ". " . $mensajeEdad . 
                " Tienes " . $nivelEstudios . " y tu sexo es " . $sexo . ".";
?>


    <div class="container mt-5">
        <div class="alert alert-info mt-4" role="alert">
            <?php echo $mensajeFinal; ?>
        </div>
        <a href="../index/ejercicio5.php" class="btn btn-secondary mt-3">Volver al formulario</a>
    </div>

<?php include_once("../estructura/footer.php"); ?>    
</body>
</html>
