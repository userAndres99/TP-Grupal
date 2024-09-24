<?php

include_once("../../configuracion.php");

$Titulo = "Resultado de la modificación";
include_once("../estructura/header.php");



$ABMPersona = new ABMPersona();
$datos = darDatosSubmitted();
// cambio case de claves para que coincidan con las de $datos al comparar valores
$personaSeleccionada = array_change_key_case($ABMPersona->arrayOnull(['nrodni' => $datos['nrodni']]), CASE_LOWER);
$errorOp = 0;
$modificado = false;
$sinCambios = true;  // el coso para ver si hay cambios

// comparar los datos y si diosito quiere sale todo bien
foreach ($datos as $key => $value) {
    // empezamos a comparar con los datos de la persona seleccionada de la base de datos
    if (isset($personaSeleccionada[$key]) && $personaSeleccionada[$key] != $value && $sinCambios==true) {
        $sinCambios = false;
    }
}

if (is_array($datos) && count($datos) > 0) {
    if ($personaSeleccionada != null) {
        //si no se modifico nada entonces no vamo por el error 4
        if ($sinCambios) {
            $errorOp = 4;  // Los datos no han cambiado

            //o sino seguimo tal cual
        } elseif ($ABMPersona->modificacion($datos)) {
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
        switch ($errorOp) {
            case 1:
                echo "ERROR: No se han enviado datos válidos";
                break;
            case 2:
                echo "ERROR: No pudimos localizar a la persona en nuestro sistema";
                break;
            case 3:
                echo "ERROR: No pudo completarse la operación de modificar";
                break;
            case 4:
                echo "ERROR: Los datos que intenta modificar son iguales a los que ya se encuentran en el sistema";
                break;
            default:
                echo "ÉXITO!";
                break;
        };
        ?>
    </div>
    <form method="post" action="accionBuscarPersona.php">
        <input type="hidden" name="nrodni" value="<?php echo $datos['nrodni']; ?>">
        <button type="submit" class="btn btn-primary mt-4">Volver atrás</button>
    </form>
</div>
<script src="../js/bootstrap.bundle.min.js"></script>
<?php include_once("../estructura/footer.php"); ?>
</body>

</html>