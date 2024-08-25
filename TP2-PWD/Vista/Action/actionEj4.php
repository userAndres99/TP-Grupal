<?php

include("../../Control/control4.php");
include("../../Utils/funciones.php");
$objControl = new Pelicula();
$datos = data_submitted();
$respuesta = $objControl->leerPelicula($datos);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados - Cinem@s</title>
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
    <script src="../../Utils/jquery-3.7.1.js"></script>
    <script src="../../Utils/jquery.validate.min.js"></script>
</head>

<body>
    <div class="container w-75 m-5">

        <h2 class="text-primary">La película introducida es...<button type="button" class="close mx-5 border-0 bg-transparent" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button></h2>

        <p class="datos-pelicula text-success">
            <?php echo $respuesta; ?>
        </p>
    </div>
    <div class="container mt-5">
        <a href="../ejercicio4.php" class="btn btn-secondary mt-3">Volver al formulario</a>
    </div>

</body>

</html>

<script>
    $("button").click(function() {
        window.location.href = '../ejercicio4.php';
    });
</script>