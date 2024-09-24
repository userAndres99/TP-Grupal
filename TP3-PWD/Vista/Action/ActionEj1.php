<?php
include_once("../estructura/header.php");
include_once "../../Control/ControlArchivo.php";
include_once "../../Utils/funciones.php";

// Recuperar el archivo subido
$file = $_FILES['archivo'];

$mensaje = '';
$archivoUrl = '';

if ($file) {
    $control = new ControlArchivo();

    // Validar el archivo usando el objeto ControlArchivo
    $resultado = $control->validarArchivo($file);

    if ($resultado) {
        // El archivo es válido, ahora usar darArchivoSubmitted para manejar la carga
        $mensaje = SubirArchivoSubmitted();
        
        // Construir URL del archivo subido
        $archivoNombre = $file['name'];
        $archivoUrl = '../../Archivos/' . $archivoNombre;
        $mensaje .= '<br>ir al archivo  <a href="' . $archivoUrl . '">este enlace</a>.';
    } else {
        // Mostrar el mensaje de error
        $mensaje = 'Error: No se pudo validar el archivo.';
    }
} else {
    $mensaje = 'No se ha subido ningún archivo.';
}
?>


    <div class="container mt-5">
        <h1 class="text-center">Resultado de la Carga del Archivo</h1>
        <div class="alert alert-info mt-4">
            <?php echo $mensaje; ?>
        </div>
        <a href="../index/ejercicio1.php" class="btn btn-primary mt-4">Volver al formulario</a>
    </div>
    <?php include_once("../estructura/footer.php"); ?>  
</body>
</html>