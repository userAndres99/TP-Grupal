<?php
// Incluir los archivos necesarios
include_once("../estructura/header.php");
include_once "../../Control/LoginControl.php";
include_once "../../Utils/funciones.php";

// Recuperar los datos del formulario
$datos = data_submitted();

// Crear una instancia de LoginControl
$loginControl = new LoginControl();

// Verificar si las credenciales son válidas
$esValido = $loginControl->verificarUsuario($datos);
?>


    <div class="container mt-5">
        <h1 class="text-center">Resultado del Login</h1>
        <div class="alert <?php echo $esValido ? 'alert-success' : 'alert-danger'; ?> mt-4">
            <?php
            if ($esValido) {
                // Mensaje de bienvenida si las credenciales son correctas
                echo 'Bienvenido, ' . $datos['usuario'] . '!';
            } else {
                // Mensaje de error si las credenciales son incorrectas
                echo 'Usuario o clave incorrectos.';
            }
            ?>
        </div>
        <a href="../index/ejercicio3.php" class="btn btn-primary mt-4">Volver al formulario</a>
    </div>
<?php include_once("../estructura/footer.php"); ?>
</body>
</html>


