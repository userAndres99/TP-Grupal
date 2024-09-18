<?php

$titulo = "TP4 - Ejercicio 7";
include_once("../estructura/header.php");

?>


<div class="container my-5">
    <div class="card">
        <div class="card-header">
            <h1 class="h4">Consigna</h1>
        </div>
        <div class="card-body">
        <p> Crear una página “NuevoAuto.php” que contenga un formulario en el que se permita cargar
todos los datos de un auto (incluso su dueño). Estos datos serán enviados a una página
“accionNuevoAuto.php” que cargue un nuevo registro en la tabla auto de la base de datos. Se debe chequear
antes que la persona dueña del auto ya se encuentre cargada en la base de datos, de no ser así mostrar un
link a la página que permite carga una nueva persona. Se debe mostrar un mensaje que indique si se pudo o
no cargar los datos Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de
control antes generada, no se puede acceder directamente a las clases del ORM.
        </p>
        </div>

    </div>
    <div class="card my-5">
        <div class="card-header">
            <h4>Ingresar nuevo auto al sistema</h4>
        </div>
        <div class="card-body">
            
            <form action="../action/accionNuevoAuto.php" class="row g-3 needs-validation" id="formAuto" name="formAuto" method="post" novalidate>
                <div class="col-md-6">
                    <label for="patente" class="form-label fw-bold text-secondary">Patente:</label>
                    <input type="text" class="form-control" name="patente" pattern="^[A-Z]{3}[\s]{1}[0-9]{3}$" required>
                    <div class="invalid-feedback">Debe ingresar un número de patente de formato ABC 123</div>
                </div>
                <div class="col-md-6">
                    <label for="marca" class="form-label fw-bold text-secondary">Marca:</label>
                    <input type="text" class="form-control" name="marca" maxlength="50" required>
                    <div class="invalid-feedback">Debe ingresar una marca menor a 50 caracteres</div>
                </div>
                <div class="col-md-6">
                    <label for="modelo" class="form-label fw-bold text-secondary">Modelo:</label>
                    <input type="text" class="form-control" name="modelo" pattern="^\d+$" maxlength="11" required>
                    <div class="invalid-feedback">El modelo debe ser un número de hasta 11 caracteres</div>
                </div>
                <div class="col-md-6">
                    <label for="dniduenio" class="form-label fw-bold text-secondary">DNI del dueño:</label>
                    <input type="text" class="form-control" name="dniduenio" pattern="^\d{1,10}$" maxlenght="10" required>
                    <div class="invalid-feedback">Debe ingresar un número de documento válido. Hasta diez caracteres.</div>
                </div>
                <div class="d-flex p-2 justify-content-center">
                <input type="submit" class="btn btn-primary mx-2" value="Enviar">
                <button type="reset" class="btn btn-primary">Borrar</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?php include_once("../estructura/footer.php"); ?>
