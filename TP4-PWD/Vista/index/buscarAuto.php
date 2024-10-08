<?php
include_once("../estructura/header.php");
include_once("../../configuracion.php");


/*  Crear una pagina "buscarAuto.php" que contenga un formulario en donde se solicite el numero
de patente de un auto, estos datos deberán ser enviados a una pagina “accionBuscarAuto.php” en donde
usando la clase de control correspondiente, se soliciten los datos completos del auto que se corresponda con
la patente ingresada y mostrar los datos en una tabla. También deberán mostrar los carteles que crean
convenientes en caso de que no se encuentre ningún auto con la patente ingresada.
Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes
generada, no se puede acceder directamente a las clases del ORM.
 */

$ABMauto = new ABMAuto;

$colPatentes = $ABMauto->mostrarPatentes();
?>

<div class=" container my-5">
    <div class="card">
    
        <div class="card-header">
        <h1 class="h4">Consigna</h1>
            
        </div>
        <div class=" card-body">
            <p>
                Crear una pagina "buscarAuto.php" que contenga un formulario en donde se solicite el numero
                de patente de un auto, estos datos deberán ser enviados a una pagina “accionBuscarAuto.php” en donde
                usando la clase de control correspondiente, se soliciten los datos completos del auto que se corresponda con
                la patente ingresada y mostrar los datos en una tabla. También deberán mostrar los carteles que crean
                convenientes en caso de que no se encuentre ningún auto con la patente ingresada.
                Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes
                generada, no se puede acceder directamente a las clases del ORM.
            </p>
        </div>
    </div>
        
    <div class="container mt-3">
        <div class="row justify-content-center">
            <h4 class="text-center mb-3 fw-light">Patentes disponibles: </h4>
            <?php 
                foreach($colPatentes as $patente){
                    echo 
                    '
                        <div class="col-md-1 px-1 mx-1">
                            <div class="card bg-white h-60">
                                <div class="card-body">
                                    <p class="card-text">'.$patente.'</p>
                                </div>
                            </div>
                        </div>
                    ';
                } 
            ?>

        </div>
    </div>
    
    <div class=" card my-5">
        <div class=" card-body">
            <form method="post" action="../action/accionBuscarAuto.php" id="formBuscarAuto" name="formBuscarAuto" class="needs-validation" novalidate>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">ingrese el numero de patente</span>
                    <input type="text" id="Patente" name="Patente" class="form-control  input-hover" pattern="^[A-Z]{3}[\s]{1}[0-9]{3}$" required>
                    <div class="invalid-feedback">Debe ingresar un número de patente de formato ABC 123</div>
                    <input type="submit" class="btn btn-primary mx-2" value="Buscar">
                </div>
            </form> 
        </div>
    </div>
    
    
</div>


<?php include_once("../estructura/footer.php"); ?>
