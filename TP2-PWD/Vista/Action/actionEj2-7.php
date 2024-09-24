<?php
include_once("../estructura/header.php");
include_once "../../../Control/ej2/calculadora.php";
include_once "../../../Utils/funciones.php";

// Obtener los datos enviados
$datos = data_submitted();

$calcular=new calculadora ();

switch ($datos['operacion']) {
    case 'suma':
        $resultado = $calcular->sumar($datos);

        break;
    case 'resta':
        $resultado = $calcular->resta($datos);

        break;
    case 'multiplicacion':
        $resultado = $calcular->multiplicacion($datos);

        break;
    default:
        $resultado = "Operación no válida";

        break;
}

?>


    <div class="container mt-5">
        <h1 class="text-center">Resultado de la Operación</h1>
        <div class="alert alert-info mt-4" role="alert">
            <?php echo "La operación seleccionada es: ". $datos['operacion']; ?><br>
            <?php echo "Operando 1: ".(float)$datos['numero1']; ?><br>
            <?php echo "Operando 2: ".(float)$datos['numero2']; ?><br>
            <?php echo "Resultado: $resultado"; ?>
        </div>
        <a href="../index/ejercicio2.php" class="btn btn-secondary mt-3">Volver al formulario</a>
    </div>
<?php include_once("../estructura/footer.php"); ?>
</body>
</html>