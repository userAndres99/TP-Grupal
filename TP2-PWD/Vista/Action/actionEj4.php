<?php
include_once("../estructura/header.php");
include("../../Utils/funciones.php");
$datos = data_submitted();

if (isset($datos) && count($datos)>0){
    extract($datos);
    $mensaje = "<p><strong>Título:</strong> $titulo </p>
            <p><strong>Actores:</strong> $actores </p>
            <p><strong>Director:</strong> $director </p>
            <p><strong>Guion:</strong> $guion </p>
            <p><strong>Producción:</strong> $produccion </p>
            <p><strong>Año:</strong> $año </p>
            <p><strong>Nacionalidad:</strong> $nacionalidad </p>
            <p><strong>Género:</strong> $genero </p>
            <p><strong>Duración:</strong> $duracion minutos</p>
            <p><strong>Restricción de Edad:</strong> $restricciones </p>
            <p><strong>Sinopsis:</strong> $sinopsis </p>";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados - Cinem@s</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery-3.7.1.js"></script>
    <script src="../js/jquery.validate.min.js"></script>
</head>

<body>
    <div class="container w-75 m-5">

        <h2 class="text-primary">La película introducida es...<button type="button" class="close mx-5 border-0 bg-transparent" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button></h2>

            <div class="alert alert-success" role="alert">
                <?php if (isset($mensaje)) echo $mensaje;?>
            </div>
    </div>
    <div class="container mt-5">
        <a href="../index/ejercicio4.php" class="btn btn-secondary mt-3">Volver al formulario</a>
    </div>

</body>

</html>

<script>
    $("button").click(function() {
        window.location.href = '../index/ejercicio4.php';
    });
</script>