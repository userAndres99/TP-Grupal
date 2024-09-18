<?php

$titulo = "TP4 - Ejercicio 6";
include_once("../estructura/header.php");

?>

<div class="container my-5">
    <div class="card">
        <div class="card-header">
            <h1 class="h4">Consigna</h1>
        </div>
        <div class="card-body">

        <p>Crear una página “NuevaPersona.php” que contenga un formulario que permita solicitar todos los datos de una persona. Estos datos serán enviados a una página “accionNuevaPersona.php” que cargue un nuevo registro en la tabla persona de la base de datos. Se debe mostrar un mensaje que indique si se pudo o no cargar los datos de la persona. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.
        </p>
        </div>

    </div>
    <div class="card my-5">
        <div class="card-header">
            <h4>Ingresar nueva persona al sistema</h4>
        </div>
        <div class="card-body">
            
            <form action="../action/accionNuevaPersona.php" class="row g-3 needs-validation" id="formPersona" name="formPersona" method="post" novalidate>
                <div class="col-md-6">
                    <label for="nrodni" class="form-label fw-bold text-secondary">Número de documento:</label>
                    <input type="text" class="form-control" name="nrodni" pattern="^\d{1,10}$" required>
                    <div class="invalid-feedback">Debe ingresar un número de documento válido. Hasta diez caracteres.</div>
                </div>
                <div class="col-md-6">
                    <label for="fechanac" class="form-label fw-bold text-secondary">Fecha de nacimiento:</label>
                    <input type="date" class="form-control" name="fechanac" required>
                    <div class="invalid-feedback">Debe ingresar una fecha de nacimiento válida</div>
                </div>
                <div class="col-md-6">
                    <label for="apellido" class="form-label fw-bold text-secondary">Apellido:</label>
                    <input type="text" class="form-control" name="apellido" pattern="^[\s]*[A-Za-z]+[\s]*[A-Za-z]*[\s]*$" maxlength="50" required>
                    <div class="invalid-feedback">Debe ingresar un apellido.</div>
                </div>
                <div class="col-md-6">
                    <label for="nombre" class="form-label fw-bold text-secondary">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" pattern="^[\s]*[A-Za-z]+[\s]*[A-Za-z]*[\s]*$" maxlength="50" required>
                    <div class="invalid-feedback">Debe ingresar un nombre válido.</div>
                </div>
                <div class="col-md-6">
                    <label for="telefono" class="form-label fw-bold text-secondary">Teléfono:</label>
                    <input type="text" class="form-control" name="telefono" pattern="^\d{3}-{1}\d{7}$" required>
                    <div class="invalid-feedback">Debe ingresar un número de teléfono de tipo XXX-XXXXXXX</div>
                </div>
                <div class="col-md-6">
                    <label for="domicilio" class="form-label fw-bold text-secondary">Domicilio:</label>
                    <input type="text" class="form-control" name="domicilio" pattern=".*\w+.*" maxlength="200" required>
                    <div class="invalid-feedback">Debe ingresar un domicilio.</div>
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
