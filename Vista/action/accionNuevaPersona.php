<?php

$Titulo = "Resultado de alta";
include_once("../estructura/header.php");
include_once("../../configuracion.php");



$ABMPersona = new ABMPersona;
$nuevaPersona = darDatosSubmitted();
$altaValida = $ABMPersona->alta($nuevaPersona);
if ($altaValida){
    $mensaje = "La nueva persona fue dada de alta en nuestro sistema.";
} else $mensaje = "ERROR. No pudo concretarse la operación";

?>


<!-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de alta</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body> -->
    <div class="container mt-5">
        <h1 class="text-center">Resultado del Alta</h1>
        <div class="alert <?php echo $altaValida ? 'alert-success' : 'alert-danger'; ?> mt-4">
            <?php echo $mensaje;?>
        </div>
        <a href="../index/NuevaPersona.php" class="btn btn-primary mt-4">Volver al formulario</a>
    </div>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <?php include_once("../estructura/footer.php"); ?>

</body>
</html>