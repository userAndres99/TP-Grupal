<?php

$titulo = "TP4 - Ejercicio 3";
include_once("../estructura/header.php");
include_once("../../configuracion.php");

$ABMAuto = new ABMAuto;
$ABMPersona = new ABMPersona;
// devuelvo todos los autos
$lista = $ABMAuto->buscarArray(null);
?>

<div class="container my-5">
    <div class="card">
        <div class="card-header">
            <h1 class="h4">Lista de autos</h1>
        </div>
        <div class="card-body">

        <table class="table table-bordered table-striped-columns table-hover">
            <thead>
                <th>Patente</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Nombre Dueño</th>
                <th>Apellido Dueño</th>
            </thead>
            <tbody>
                <?php
                    if (is_array($lista) && count($lista)>0){
                        foreach($lista as $auto){
                            echo '<tr>';
                            echo '<td>' . $auto['patente'] . '</td>';
                            echo '<td>' . $auto['marca'] . '</td>';
                            echo '<td>' . $auto['modelo'] . '</td>';
                            echo '<td>' . convert_array([$auto['objDuenio']])[0]['nombre'] . '</td>';
                            echo '<td>' . convert_array([$auto['objDuenio']])[0]['apellido'] . '</td>';
                            echo '<tr>';
                        }
                    } else echo '<tr><td colspan="5" class=" text-bg-danger text-center">No hay autos cargados.</td></tr>';
                ?>
            </tbody>
        </table>
        </div>

    </div>
</div>

<?php include_once("../estructura/footer.php"); ?>
