<?php
include_once("../estructura/header.php");
include_once "../../Utils/funciones.php";
include_once "../../Control/tarifa.php";

// Obtener los datos enviados
$datos = darDatosSubmitted();

$tarifa= new Tarifa();

$precio=$tarifa->calculo($datos);


?>

<div class="container mt-5">
        <h1 class="text-center">Precio de la Entrada</h1>
        <div class="alert alert-info mt-4" role="alert">
            <?php echo "El precio de tu entrada es: $" . $precio; ?>
        </div>
        <a href="../index/ejercicio8.php" class="btn btn-secondary mt-3">Volver al formulario</a>
    </div>

<?php include_once("../estructura/footer.php"); ?>    
</body>
</html>