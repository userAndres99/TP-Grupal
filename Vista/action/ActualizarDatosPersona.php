<?php

include_once("../../configuracion.php");

$Titulo = "Resultado de la modificación";
include_once("../estructura/header.php");


$ABMPersona = new ABMPersona();
$datos = darDatosSubmitted();
$personaSeleccionada = convert_array($ABMPersona->buscar(['nrodni' => $datos['nrodni']]))[0];
$errorOp = 0;
$modificado = false;

if (is_array($datos) && count($datos)>0){
    if (is_array($personaSeleccionada) && count($personaSeleccionada)>0){
        if ($ABMPersona->modificacion($datos)){
            $modificado = true;
        } else $errorOp = 3;
    } else $errorOp = 2;
} else $errorOp = 1;

?>

<!-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la modificación</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body> -->
    <div class="container mt-5">
        <h1 class="text-center">Resultado del cambio de dueño</h1>
        <div class="alert <?php echo $modificado ? 'alert-success' : 'alert-danger'; ?> mt-4">
            <?php
                switch($errorOp){
                    case 1:
                        echo "ERROR: No se han enviado datos válidos";
                        break;
                    case 2:
                        echo "ERROR: No pudimos localizar a la persona en nuestro sistema";
                        break;
                    case 3:
                        echo "ERROR: No pudo completarse la operación de modificar";
                        break;
                    default:
                        echo "ÉXITO!";
                        break;
                };
            ?>
        </div>
        <a href="../index/accionBuscarPersona.php" class="btn btn-primary mt-4">Volver atrás</a>
    </div>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <?php include_once("../estructura/footer.php"); ?>
</body>
</html>