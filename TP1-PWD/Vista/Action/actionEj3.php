<?php
    include_once("../estructura/header.php");
    include_once "../../Control/verdatos.php";
    include_once "../../Utils/funciones.php";

    $datos = darDatosSubmitted();

    $obj = new Datos();
    $mensaje = $obj->mostrarDatos($datos);

?>


    <div class="container mt-5">
        <h1 class="text-center mb-4">Resultados del Formulario</h1>
        <div class="alert alert-info mt-4" role="alert">
            <?php echo $mensaje; ?>
        </div>
        <a href="../index/ejercicio3.php" class="btn btn-primary mt-3">Volver al formulario</a>
    </div>

<?php include_once("../estructura/footer.php"); ?>    
</body>
</html>