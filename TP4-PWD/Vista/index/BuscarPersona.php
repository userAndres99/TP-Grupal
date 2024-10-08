<?php
include_once("../estructura/header.php");
include_once("../../configuracion.php");

$ABMpersona = new ABMPersona;

$colDocumentos = $ABMpersona->mostrarDNIs();

// print_r($colDocumentos);

?>

<div class="container my-5">
    <div class="card">
        <div class="card-header">
            <h1 class="h4">Consigna</h1>
        </div>
        <div class="card-body">
        <p> Crear una página “BuscarPersona.html” que contenga un formulario que permita cargar un
numero de documento de una persona. Estos datos serán enviados a una página “accionBuscarPersona.php”
busque los datos de la persona cuyo documento sea el ingresado en el formulario los muestre en un nuevo
formulario; a su vez este nuevo formulario deberá permitir modificar los datos mostrados (excepto el nro de
documento) y estos serán enviados a otra página “ActualizarDatosPersona.php” que actualiza los datos de la
persona. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control
antes generada, no se puede acceder directamente a las clases del ORM.
        </p>
        </div>

    </div>

    <div class="container mt-3">
        <div class="row justify-content-center">
            <h4 class="text-center mb-3 fw-light">Documentos disponibles: </h4>
            <?php 
                foreach($colDocumentos as $documento){
                    echo 
                    '
                        <div class="col px-5 mx-3">
                            <div class="card bg-white h-60">
                                <div class="card-body offset-md-1">
                                    <p class="card-text">'.$documento.'</p>
                                </div>
                            </div>
                        </div>
                    ';
                } 
            ?>

        </div>
    </div>

    <div class="card my-5">
        <div class="card-header">
            <h4>Búsqueda de persona en el sistema</h4>
        </div>
        <div class="card-body">
            
            <form action="../action/accionBuscarPersona.php" class="row g-3 needs-validation" id="formBuscarPersona" name="formBuscarPersona" method="post" novalidate>
                <div class="col-md-6">
                    <label for="nroDni" class="form-label fw-bold text-secondary">Ingrese el número de documento:</label>
                    <input type="text" class="form-control  input-hover" name="nrodni" pattern="^\d{1,10}$" required>
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
