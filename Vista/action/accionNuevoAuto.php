<?php
include_once("../../configuracion.php");

$Titulo = "Resultado de alta de auto";
include_once("../estructura/header.php");


$mensaje = '';
$datos = darDatosSubmitted();
$ABMPersona = new ABMPersona();
$ABMAuto = new ABMAuto();
$propietarioAuto = $ABMPersona->buscar(['nrodni' => $datos['dniduenio']]);
$existePropietario = true;
$altaValida = false;
$patenteExistente = false;

// Verificar si la patente ya está registrada usando arrayOnull
$autoExistente = $ABMAuto->arrayOnull(['Patente' => $datos['patente']]);

if (!is_null($autoExistente)) {
    $patenteExistente = true;
}

if (!$patenteExistente) {
    if (is_array($propietarioAuto) && count($propietarioAuto) > 0) {
        $datos['objDuenio'] = $propietarioAuto[0];
        if ($ABMAuto->alta($datos)) {
            $altaValida = true;
        }
    } else {
        $existePropietario = false;
    }
}
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
        <?php
        if ($patenteExistente) {
            echo "La patente que intenta ingresar ya se encuentra en la base de datos registrada.";
        } elseif ($existePropietario) {
            if ($altaValida) {
                echo "El auto fue correctamente ingresado.";
            } else {
                echo "No pudo realizarse la inserción del auto en el sistema.";
            }
        } else {
            echo '<p>No existe un propietario con ese número de documento en nuestro sistema.</p>
                  <a href="../index/NuevaPersona.php" class="btn btn-primary mt-4">Dar de alta un nuevo usuario</a>';
        }
        ?>
    </div>
    <a href="../index/NuevoAuto.php" class="btn btn-primary mt-4">Volver al formulario</a>
</div>
<script src="../js/bootstrap.bundle.min.js"></script>
<?php include_once("../estructura/footer.php"); ?>
</body>
</html>