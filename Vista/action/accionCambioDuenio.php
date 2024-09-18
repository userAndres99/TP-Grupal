<?php

$Titulo = "Resultado del cambio de dueño";
include_once("../estructura/header.php");
include_once("../../configuracion.php");



$ABMPersona = new ABMPersona();
$ABMAuto = new ABMAuto();
$datos = darDatosSubmitted();

$errorOp = null;
$modificado = false;

$propietario = ($ABMPersona->buscar(['nrodni' => $datos['DniDuenio']]))[0];
$auto = convert_array($ABMAuto->buscar(['Patente' => $datos['Patente']]))[0];
$nuevoPropietario = convert_array($ABMPersona->buscar(['nrodni' => $datos['DniDuenio']]));
$actualPropietario = convert_array([$auto['objDuenio']]);


if ($propietario <> null){
    if (is_array($auto) && count($auto)>0){
        if ($actualPropietario[0]['nroDni'] != $nuevoPropietario[0]['nroDni']){
            $auto['objDuenio'] = $propietario;
            if ($ABMAuto->modificacion($auto)){
                $modificado = true;
            } else $errorOp = 4;
        } else $errorOp = 3;
    } else $errorOp = 2;
} else $errorOp = 1;


?>


<!-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del cambio de dueño</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head> -->
<body>
    <div class="container mt-5">
        <h1 class="text-center">Resultado del cambio de dueño</h1>
        <div class="alert <?php echo $modificado ? 'alert-success' : 'alert-danger'; ?> mt-4">
            <?php
                switch($errorOp){
                    case 1:
                        echo "ERROR: El DNI no corresponde a ninguna persona cargada en el sistema";
                        break;
                    case 2:
                        echo "ERROR: La patente no corresponde a ningún auto en el sistema";
                        break;
                    case 3:
                        echo "ERROR: El auto ya está registrado bajo ese titular en el sistema";
                        break;
                    case 4:
                        echo "ERROR: No pudo realizarse la operación de modificación";
                        break;
                    default:
                        echo "ÉXITO!";
                        break;
                };
            ?>
        </div>
        <a href="../index/CambioDuenio.php" class="btn btn-primary mt-4">Volver al formulario</a>
    </div>
    <script src="../js/bootstrap.bundle.min.js"></script>

    <?php include_once("../estructura/footer.php"); ?>
</body>


</html>