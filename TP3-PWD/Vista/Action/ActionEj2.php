<?php
include_once("../estructura/header.php");
include_once "../../Control/ControlArchivoEj2.php";
include_once "../../Utils/funciones.php";

// Recuperar el archivo subido
$file = $_FILES['archivo'];

$mensaje = '';
$contenido = '';

if ($file) {
    $control = new ControlArchivo();

    // Validar el archivo usando el objeto ControlArchivo
    $resultado = $control->validarArchivo($file);

    if ($resultado) {
        // El archivo es válido, se usa SubirArchivoSubmitted para manejar la carga
        $mensaje = SubirArchivoSubmitted();
        
        // Leer el contenido del archivo
        // file_get_contents lee el contenido de un archivo y devolverlo como una cadena
        $contenido = file_get_contents('../../Archivos/' . $file['name']);
        // Mostrar el contenido en un textarea
        $mensaje .= '<br>Contenido del archivo:';
    } else {
        // Mostrar el mensaje de error
        $mensaje = 'Error: El archivo no es de tipo .txt o no se pudo validar.';
    }
} else {
    $mensaje = 'No se ha subido ningún archivo.';
}
?>


    <div class="container mt-5">
        <h1 class="text-center">Resultado de la Carga del Archivo</h1>
        <div class="alert alert-info mt-4">
            <p><?php echo $mensaje; ?></p>
            <?php if ($contenido): ?>
                <textarea rows="10" cols="80" readonly><?php echo $contenido; ?></textarea>
            <?php endif; ?>
        </div>
        <a href="../index/ejercicio2.php" class="btn btn-primary mt-4">Volver al formulario</a>
    </div>
    <?php include_once("../estructura/footer.php"); ?>  
</body>
</html>