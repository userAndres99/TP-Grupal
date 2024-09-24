<?php

/* acá tengo que, utilizando la clase de control, 
mostrar datos completos del auto correspondientes 
con la patente ingresada en una tabla. 
o carteles en caso de no encontrar ningún auto con
la patente ingresada. */

$Titulo = "Buscar Auto";
include_once("../estructura/header.php");
include_once("../../configuracion.php");


$ABMAuto = new ABMAuto;
$datos = darDatosSubmitted();

$autoBuscado = $ABMAuto->arrayOnull($datos);

if ($autoBuscado <> null) $arrDuenio = $ABMAuto->buscarArray($autoBuscado['objDuenio']);

?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body> -->
    
    <div class="container my-5">
        <table class=" table table-striped-columns border border-primary-subtle">
            
            <thread>
                <th scope="col">Patente</th>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">Nombre Dueño</th>
                <th scope="col">Apellido Dueño</th>
            </thread>
            <tbody>
                <tr>
                    <!-- <th scope="row">1</th> -->
                     <?php 
                        if ($datos && is_array($autoBuscado) && count($autoBuscado)>0){
                            echo '<td class="font-monospace text-primary fw-bold">' . $autoBuscado['patente'] . '</td>';
                            echo '<td class="font-monospace text-primary fw-bold">' . $autoBuscado['marca'] . '</td>';
                            echo '<td class="font-monospace text-primary fw-bold">' . $autoBuscado['modelo'] . '</td>';
                            echo '<td class="font-monospace text-primary fw-bold">' . $arrDuenio['nombre'] . '</td>';
                            echo '<td class="font-monospace text-primary fw-bold">' . $arrDuenio['apellido'] . '</td>';
                        } else echo '<td class=" text-bg-warning text-center" colspan="5">No hay autos con la patente <b>'.$datos['Patente'].'</b> en el sistema.</td>';
                     ?>
                </tr>  
            </tbody>
        
        </table>
        <a href="../index/buscarAuto.php" class="btn btn-primary mt-4">Volver al formulario</a>

    </div>
    <script src="../Bootstrap/js/bootstrap.bundle.min.js"></script>
    <?php include_once("../estructura/footer.php"); ?>
</body>


</html>

