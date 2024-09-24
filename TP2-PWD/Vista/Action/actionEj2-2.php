<?php
include_once("../estructura/header.php");
include_once "../../Control/ej2/verhoras.php";
include_once "../../Utils/funciones.php"; // Incluye funciones.php para utilizar data_submitted()

    // Recuperar todos los datos enviados, ya sea por GET o POST
    $datos = data_submitted();

    $obj = new Horas();
    $totalHoras = $obj->calcularHoras($datos);

?>


    <div class="container mt-5">
        <h1 class="text-center mb-4">Horas Ingresadas</h1>
        <div class="alert alert-info mt-4" role="alert">
            <?php echo "La cantidad total de horas cursadas es: " . $totalHoras; ?>
        </div>
        <a href="../index/ejercicio2.php" class="btn btn-primary mt-3">Volver al formulario</a>
    </div>
<?php include_once("../estructura/footer.php"); ?>
</body>
</html>