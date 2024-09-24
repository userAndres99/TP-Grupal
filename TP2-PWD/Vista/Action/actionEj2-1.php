
<?php
    include_once("../estructura/header.php");
    include_once "../../../Control/ej2/vernumero.php";
    include_once "../../../Utils/funciones.php";
    //las tareas que van a ir en la carpeta action es recuperar los datos de la interfaz
    //en este caso seria solo el numero el que se tiene que recuperar

    $datos=data_submitted();

    $obj = new Numero();

    $mensaje=$obj->devolverSigno($datos);

    
?>


                <!-- el MT-5 es para un margin top 5-->
    <div class="container mt-5">

        <!-- TEXT-CENTER es para centrar el texto -->
        <h1 class="text-center">Número Ingresado</h1>

         <!--el ALERT define el estilo base de un mensaje de alerta-->
         <!--el ALERT-INFO un estilo específico para alertas de tipo "informativo"-->
         <!--el MT-4 Esta clase aplica un margen superior de tamaño 4-->
        <div class="alert alert-info mt-4" >

            <?php echo "El número ingresado es: <strong>$mensaje</strong>"; ?>

        </div>

        <!--un boton primary de bootstrap con un margen superior de 4-->
        <a href="../index/ejercicio2.php" class="btn btn-primary mt-4">Volver al formulario</a>
    </div>
    
<?php include_once("../estructura/footer.php"); ?>
</body>
</html>

