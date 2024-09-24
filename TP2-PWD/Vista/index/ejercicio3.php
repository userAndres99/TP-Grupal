<?php
$Titulo = "Ejercicio 3";
include_once("../estructura/header.php");
?>

    <div class="pt-5 ps-5"> 
        <div class="card-header">
        <h1 class="h4">Consigna</h1>
        </div>
    <p>
        A- Crear una nueva página PHP con un formulario HTML de login en la que se solicite el usuario 
        y la contraseña para loguearse. Los datos del formulario son enviados a un script 
        <code>verificaPass.php</code> en el que contienen un arreglo asociativo por cada usuario del sistema. 
        El arreglo asociativo tiene como claves: “usuario” y “clave”. El script debe visualizar un mensaje 
        de bienvenida si los datos ingresados coinciden con alguno de los almacenados en el arreglo 
        y, en caso contrario, un mensaje de error. <br/>
    </p>
    <p>
        B- Realizar la validación de este formulario. Chequear no solo que se hayan cargado el usuario 
        y la contraseña antes de ser enviados al servidor, sino que también debe realizar un control de 
        contraseña segura (la contraseña debe tener como mínimo 8 caracteres, no puede ser igual que 
        el nombre de usuario ingresado y debe contener letras y números).
    </p>  
    <p>
        C- Aplicar Bootstrap para el diseño del formulario.
    </p>
    </div>
    <div class="login-container">
        <h4 class="text-center">Member Login</h4>
        <form id="loginForm" name="loginForm" method="post" action="../Action/verificaPass.php" >
            <div class="form-group">
                <img src="../Imagenes/Personita.png" alt="User Icon" class="icon">
                <input name="usuario" type="text" id="usuario" class="form-control" placeholder="Username" required>
            </div>
            <div class="form-group mt-3">
                <img src="../Imagenes/Candadito.png" alt="Password Icon" class="icon">
                <input name="clave" type="password" id="clave" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-login mt-4">Login</button>
            <!-- Contenedor para mensajes de error -->
            <div id="errorMessages" class="mt-3"></div>
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