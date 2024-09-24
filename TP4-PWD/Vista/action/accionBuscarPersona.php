<?php

$Titulo = "Datos de la persona ingresada";
include_once("../estructura/header.php");
include_once("../../configuracion.php");


$ABMPersona = new ABMPersona();
$datos = darDatosSubmitted();

$resultadoBusqueda = $ABMPersona->buscarArray($datos);
$personaSeleccionada = !empty($resultadoBusqueda) ? $resultadoBusqueda[0] : null;

if (is_null($personaSeleccionada)) {
    // Mostrar mensaje de error si no se encuentra la persona
    echo "<div class='alert alert-danger' role='alert'>La persona ingresada no está en la base de datos.</div>";
    echo "<a href='../index/BuscarPersona.php' class='btn btn-primary mt-4'>Volver al formulario</a>";
    include_once("../estructura/footer.php");
    exit();
}

?>


<div class="container my-5">

    <div class="card my-5">
        <div class="card-header">
            <h4>Datos de la persona ingresada</h4>
        </div>
        <div class="card-body">
            
            <form action="ActualizarDatosPersona.php" class="row g-3 needs-validation" id="formPersona" name="formPersona" method="post" novalidate>
                <div class="col-md-6">
                    <label for="nrodni" class="form-label fw-bold text-secondary">Número de documento:</label>
                    <input class="form-control-plaintext mx-2" type="text" name="nrodni" value="<?php echo $personaSeleccionada['nroDni'];?>" readonly>
                </div>
                <div class="col-md-6">
                    <label for="fechanac" class="form-label fw-bold text-secondary">Fecha de nacimiento:</label>
                    <input type="date" class="form-control" name="fechanac" value="<?php echo $personaSeleccionada['fechaNac'];?>" required>
                    <div class="invalid-feedback">Debe ingresar una fecha de nacimiento válida</div>
                </div>
                <div class="col-md-6">
                    <label for="apellido" class="form-label fw-bold text-secondary">Apellido:</label>
                    <input type="text" class="form-control" name="apellido" value="<?php echo $personaSeleccionada['apellido'];?>" pattern="^[\s]*[A-Za-z]+[\s]*[A-Za-z]*[\s]*$" maxlength="50" required>
                    <div class="invalid-feedback">Debe ingresar un apellido.</div>
                </div>
                <div class="col-md-6">
                    <label for="nombre" class="form-label fw-bold text-secondary">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" value="<?php echo $personaSeleccionada['nombre'];?>" pattern="^[\s]*[A-Za-z]+[\s]*[A-Za-z]*[\s]*$" maxlength="50" required>
                    <div class="invalid-feedback">Debe ingresar un nombre válido.</div>
                </div>
                <div class="col-md-6">
                    <label for="telefono" class="form-label fw-bold text-secondary">Teléfono:</label>
                    <input type="text" class="form-control" name="telefono" value="<?php echo $personaSeleccionada['telefono'];?>" pattern="^\d{3}-{1}\d{7}$" required>
                    <div class="invalid-feedback">Debe ingresar un número de teléfono de tipo XXX-XXXXXXX</div>
                </div>
                <div class="col-md-6">
                    <label for="domicilio" class="form-label fw-bold text-secondary">Domicilio:</label>
                    <input type="text" class="form-control" name="domicilio" value="<?php echo $personaSeleccionada['domicilio'];?>" name="domicilio" pattern=".*\w+.*" maxlength="200" required>
                    <div class="invalid-feedback">Debe ingresar un domicilio.</div>
                </div>
                <div class="d-flex p-2 justify-content-center">
                <input type="submit" class="btn btn-primary mx-2" value="Modificar datos">
                <button type="reset" class="btn btn-primary">Reestablecer</button>
            </div>
            </form>
        </div>
    </div>
    <a href="../index/BuscarPersona.php" class="btn btn-primary mt-4">Volver al formulario</a>

</div>

<?php include_once("../estructura/footer.php"); ?>
