<?php
$Titulo = "Ejercicio 4";
include_once("../estructura/header.php");
?> 

<body class="bg-light">
    <div class="container mt-5">
    <div class="card-header">
        <h1 class="h4">Consigna</h1>
    </div>
    <p>
        Modificar el formulario del ejercicio anterior para que, usando la edad solicitada, se envíen 
        esos datos a otra página en donde se muestren mensajes distintos dependiendo si la 
        persona es mayor de edad o no (si la edad es mayor o igual a 18). 
        Enviar los datos usando el método GET y luego probar de modificar los datos 
        directamente en la URL para ver los dos posibles mensajes.
    </p>
        <h1 class="text-center">Ingrese sus datos</h1>
        <form id="formEj3y4" name="formEj3y4" method="get" action="../Action/actionEj4.php" >
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input name="nombre" type="text" id="nombre" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido:</label>
                <input name="apellido" type="text" id="apellido" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="edad" class="form-label">Edad:</label>
                <input name="edad" type="number" id="edad" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección:</label>
                <input name="direccion" type="text" id="direccion" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        
    </div>
    <div class="mt-4 p-5">
        <a href="../../../Menu.php" class="btn btn-secondary">Volver al menú</a>
    </div>
    <?php

include_once("../estructura/footer.php");
?>
</body>
</html>