
<?php
include_once("../estructura/header.php");
include_once "../../Utils/funciones.php";
include_once "../../Control/verdatos.php";

// Obtener los datos enviados
$datos = darDatosSubmitted();

// Crear una instancia del controlador
$controlador = new datos();

// Procesar los datos y obtener el mensaje
$mensaje = $controlador->procesarEdad($datos);

?>


    <div class="container mt-5">
        <div class="alert alert-info mt-4" role="alert">
            <?php echo $mensaje; ?>
        </div>
        <a href="../index/ejercicio4.php" class="btn btn-secondary mt-3">Volver al formulario</a>
    </div>

<?php include_once("../estructura/footer.php"); ?>    
</body>
</html>