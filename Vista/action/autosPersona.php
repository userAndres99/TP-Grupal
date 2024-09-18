<?php


include_once("../../configuracion.php");

$Titulo = "Lista de autos";
include_once("../estructura/header.php");


$ABMAuto = new ABMAuto;
$ABMPersona = new ABMPersona;
$dniPersona = darDatosSubmitted();
$listaAutos = convert_array($ABMAuto->buscar(['DniDuenio' => $dniPersona['nrodni']]));

?>

<!-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP4 - Ejercicio 5</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body> -->
    <div class="container mt-5">
        <h1 class="text-center">Lista de autos</h1>
        <div class="alert alert-info mt-4">
        <table class="table table-bordered">
            <thead>
                <th>Patente</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Nombre Dueño</th>
                <th>Apellido Dueño</th>
            </thead>
            <tbody>
                <?php
                    if (is_array($listaAutos) && count($listaAutos)>0){
                        foreach($listaAutos as $auto){
                            echo '<tr>';
                            echo '<td>' . $auto['patente'] . '</td>';
                            echo '<td>' . $auto['marca'] . '</td>';
                            echo '<td>' . $auto['modelo'] . '</td>';
                            echo '<td>' . convert_array([$auto['objDuenio']])[0]['nombre'] . '</td>';
                            echo '<td>' . convert_array([$auto['objDuenio']])[0]['apellido'] . '</td>';
                            echo '<tr>';
                        }
                    } else echo '<tr><td colspan="5">No hay autos cargados.</td></tr>';
                ?>
            </tbody>
        </table>
        </div>
        <a href="../index/listaPersonas.php" class="btn btn-primary mt-4">Volver al listado de personas</a>
    </div>
    <script src="../Bootstrap/js/bootstrap.bundle.min.js"></script>
    <?php include_once("../estructura/footer.php"); ?>
</body>
</html>



