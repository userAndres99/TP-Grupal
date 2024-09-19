<?php

$titulo = "TP4 - Ejercicio 8";
include_once("../estructura/header.php");
include_once("../../configuracion.php");

$ABMpersona = new ABMPersona;
$ABMauto = new ABMAuto; 

$colDocumentos = $ABMpersona->mostrarDNIs();
$colPatentes = $ABMauto->mostrarPatentes();
$cantColumnas = (count($colPatentes) > count($colDocumentos)) ? count($colPatentes) : count($colDocumentos);
?>

<div class="container my-5">
    <div class="card">
        <div class="card-header">
            <h1 class="h4">Consigna</h1>
        </div>
        <div class="card-body">
        <p> Crear una página “CambioDuenio.php” que contenga un formulario en donde se solicite el
numero de patente de un auto y un numero de documento de una persona, estos datos deberán ser enviados
a una página “accionCambioDuenio.php” en donde se realice cambio del dueño del auto de la patente
ingresada en el formulario. Mostrar mensajes de error en caso de que el auto o la persona no se encuentren
cargados. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control
antes generada, no se puede acceder directamente a las clases del ORM.
        </p>
        </div>

    </div>
    
    <table class="table mt-4 table-hover table-bordered border-primary">
    <thead>
        <tr>
            <th scope="col" class="table-primary">#</th>
            <th scope="col" colspan= "<?= $cantColumnas ?>" class="text-center table-light">Datos disponibles </th>
            
        </tr>
    </thead>
    <tbody class="table-group-divider">
        <tr>
            <th scope="row" class="table-primary">Patentes</th>
            <?php 
                foreach($colPatentes as $patente){
                    echo '<td class="table-info">'.$patente.'</td>';
                }
            ?>
        </tr>
        <tr>
            <th scope="row" class="table-primary">Documentos</th>
            <?php 
            foreach($colDocumentos as $documento){
                echo '<td class="table-info">'.$documento.'</td>';
            }
            ?>
        </tr>
    </tbody>
</table>


    <div class="card my-5">
        <div class="card-header">
            <h4>Cambio de dueño de un auto en el sistema</h4>
        </div>
        <div class="card-body">
            
            <form action="../action/accionCambioDuenio.php" class="row g-3 needs-validation" id="formCambioDuenio" name="formCambioDuenio" method="post" novalidate>
                <div class="col-md-6">
                    <label for="patente" class="form-label fw-bold text-secondary">Ingrese el número de patente:</label>
                    <input type="text" class="form-control" name="Patente" pattern="^[A-Z]{3}[\s]{1}[0-9]{3}$" required>
                    <div class="invalid-feedback">Debe ingresar un número de patente de formato ABC 123</div>
                </div>
                <div class="col-md-6">
                    <label for="nrodni" class="form-label fw-bold text-secondary">Ingrese el número de documento del nuevo dueño:</label>
                    <input type="text" class="form-control" name="DniDuenio" pattern="^\d{1,10}$" required>
                    <div class="invalid-feedback">Debe ingresar un número de documento válido. Hasta diez caracteres.</div>
                </div>
                <div class="d-flex p-2 justify-content-center">
                <input type="submit" class="btn btn-primary mx-2" value="Enviar">
                <button type="reset" class="btn btn-primary">Borrar</button>
            </div>
            </div>
            </form>
        </div>
    </div>
</div>

<?php include_once("../estructura/footer.php"); ?>
