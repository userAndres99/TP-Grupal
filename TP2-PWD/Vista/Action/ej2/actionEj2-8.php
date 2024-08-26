<?php
include_once "../../../Control/ej2/tarifa.php";
include_once "../../../Utils/funciones.php";

// Obtener los datos enviados
$datos = data_submitted();

$tarifa= new Tarifa();

$precio=$tarifa->calculo($datos);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Cálculo</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center">Precio de la Entrada</h1>
        <div class="alert alert-info mt-4" role="alert">
            <?php echo "El precio de tu entrada es: $" . $precio; ?>
        </div>
        <a href="../../ejercicio2.php" class="btn btn-secondary mt-3">Volver al formulario</a>
    </div>
    <script src="../../js/bootstrap.bundle.min.js"></script>
</body>
</html>