<?php
$Titulo = "Ejercicio 7";
include_once("../estructura/header.php");
?> 

<body class="bg-light">
    <div class="container mt-5">
    <div class="card-header">
        <h1 class="h4">Consigna</h1>
    </div>
    <p>
        Crear una página con un formulario que contenga dos input de tipo text y un select. En 
        los inputs se ingresarán números y el select debe dar la opción de una operación 
        matemática que podrá resolverse usando los números ingresados. En la página que 
        procesa la información se debe mostrar por pantalla la operación seleccionada, cada 
        uno de los operandos y el resultado obtenido de resolver la operación.
    </p>
        <h1 class="text-center">Operaciones Matemáticas</h1>
        <form id="formEj7" name="formEj7" method="get" action="../Action/actionEj7.php" >
            <div class="mb-3">
                <label for="numero1" class="form-label">Número 1:</label>
                <input name="numero1" type="text" id="numero1" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="numero2" class="form-label">Número 2:</label>
                <input name="numero2" type="text" id="numero2" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="operacion" class="form-label">Operación:</label>
                <select name="operacion" id="operacion" class="form-select" required>
                    <option value="suma">Suma</option>
                    <option value="resta">Resta</option>
                    <option value="multiplicacion">Multiplicación</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
        
    </div>
    <div class="mt-4 p-5">
        <a href="../../../index.php" class="btn btn-secondary">Volver al menú</a>
    </div>
    <?php

include_once("../estructura/footer.php");
?>    
</body>
</html>