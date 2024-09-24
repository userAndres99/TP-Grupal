<?php
include_once("../estructura/header.php");
include_once "../../Utils/funciones.php";
include_once "../../Control/verdatos.php";

// Obtener los datos enviados
$datos = darDatosSubmitted();

$control=new Datos();

// Determinar el mensaje sobre la mayoría de edad
$mensajeEdad=$control->procesarEdad($datos);

// Determinar el mensaje sobre el nivel de estudios
$mensajeEstudios=$control->obtenerNivelEstudio($datos);

// Contar la cantidad de deportes seleccionados
$deportes = $control->contarDeportes($datos);

$mensajeDeportes = "Practicas " . $deportes . " deportes.";

// Crear el mensaje final
$mensajeFinal = "Hola, " . $datos['nombre'] . " " . $datos['apellido'] . ". " . $mensajeEdad . " " . $mensajeEstudios . " " . $mensajeDeportes;
?>


    <div class="container mt-5">
        <div class="alert alert-info mt-4" role="alert">
            <?php echo $mensajeFinal; ?>
        </div>
        <a href="../index/ejercicio6.php" class="btn btn-secondary mt-3">Volver al formulario</a>
    </div>

<?php include_once("../estructura/footer.php"); ?>    
</body>
</html>