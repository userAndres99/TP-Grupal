<?php

include_once "../../../Control/ej2/verhoras.php";
include_once "../../../Utils/funciones.php"; // Incluye funciones.php para utilizar data_submitted()

    // Recuperar todos los datos enviados, ya sea por GET o POST
    $datos = data_submitted();

    $obj = new Horas();
    $totalHoras = $obj->calcularHoras($datos);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesa</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center mb-4">Horas Ingresadas</h1>
        <div class="alert alert-info mt-4" role="alert">
            <?php echo "La cantidad total de horas cursadas es: " . $totalHoras; ?>
        </div>
        <a href="../../ejercicio2.php" class="btn btn-primary mt-3">Volver al formulario</a>
    </div>
    <script src="../../js/bootstrap.bundle.min.js"></script>
</body>
</html>