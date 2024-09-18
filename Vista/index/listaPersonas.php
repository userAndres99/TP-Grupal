<?php

$titulo = "TP4 - Ejercicio 5";
include_once("../estructura/header.php");
include_once("../../configuracion.php");

$ABMAuto = new ABMAuto;
$ABMPersona = new ABMPersona;
$listaPersonas = convert_array($ABMPersona->buscar(null));

?>

<div class="container my-5">
    <div class="card">
        <div class="card-header">
            <h4>Lista de personas</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <th>DNI</th>
                    <th>Apellido</th>
                    <th>Nombre</th>
                    <th>Fecha Nacimiento</th>
                    <th>Teléfono</th>
                    <th>Domicilio</th>
                </thead>
                <tbody>
                    <?php
                    if (is_array($listaPersonas) && count($listaPersonas) > 0) {
                        foreach ($listaPersonas as $persona) {
                            echo '<tr>';
                            echo '<td>' . $persona['nroDni'] . '</td>';
                            echo '<td>' . $persona['apellido'] . '</td>';
                            echo '<td>' . $persona['nombre'] . '</td>';
                            echo '<td>' . $persona['fechaNac'] . '</td>';
                            echo '<td>' . $persona['telefono'] . '</td>';
                            echo '<td>' . $persona['domicilio'] . '</td>';
                            echo '<tr>';
                        }
                    } else echo '<tr><td colspan="6">No hay personas cargadas.</td></tr>';
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card my-5">
            <card class="card-header">
                <h4>Buscar autos según titular</h4>
            </card>
            <card class="card-body">
                <form method="post" action="Action/autosPersona.php">
                    <div class="mb-3">
                        <label for="nrodni" class="form-label">Ingrese el número de documento:</label>
                        <input type="text" name="nrodni" id="nrodni" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Ver listado de autos</button>
                </form>
            </card>
        </div>

</div>

<?php include_once("../estructura/footer.php"); ?>
