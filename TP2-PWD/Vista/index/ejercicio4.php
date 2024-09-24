<?php
$Titulo = "Ejercicio 4";
include_once("../estructura/header.php");
?>

    <div class="container pt-5 ps-5"> 
        <div class="card-header">
            <h1 class="h4">Consigna</h1>
        </div>
        <p>Diseñar un formulario que permita cargar las películas de la empresa Cinem@s. La lista de géneros tiene los siguientes datos: Comedia, Drama, Terror, Románticas, Suspenso, Otras. Aplicar Bootstrap y validar lo siguiente:</p>
            <ul>
                <li>El año debe ser un campo que permita ingresar como máximo 4 caracteres y solo aceptar números.</li>
                <li>El campo duración debe permitir un máximo de 3 números.</li>
                <li>Todos los datos son obligatorios.</li>
                <li>Al hacer clic en el botón “Enviar”, se deberán mostrar todos los datos ingresados en el formulario.</li>
                <li>El botón “Borrar” debe limpiar el formulario.</li>
            </ul>
    </div>
    <div class="container w-100 p-0">
    <div class="container w-100 m-0 p-0">
    <h4 class="navbar-expand mt-5 px-3 py-2 bg-light text-primary font-weight-bold" style="margin-top: 5px; margin: 0; background-image: linear-gradient(#fcfcfc, #e3e3e3); border: 1px solid #e8e8e8;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg> Cinem@s</h4>
    </div>
    <div class="container p-5 mb-5 border border-muted w-100">
    
        <form class="row g-3" action="../action/actionEj4.php" method="POST" id="cineform">
            <div class="col-md-6">
                <label for="titulo" class="form-label font-weight-bold text-secondary">Titulo</label>
                <input type="text" class="form-control" name="titulo"> <br>
            </div>
            <br>
            <div class="col-md-6">
                <label for="actores" class="form-label font-weight-bold text-secondary">Actores</label>
                <input type="text" class="form-control" name="actores">
            </div>
            <div class="col-md-6">
                <label for="director" class="form-label font-weight-bold text-secondary">Director</label>
                <input type="text" class="form-control" name="director"><br>
            </div>
            <div class="col-md-6">
                <label for="guion" class="form-label font-weight-bold text-secondary">Guión</label>
                <input type="text" class="form-control" name="guion">
            </div>
            <div class="col-md-6">
                <label for="produccion" class="form-label font-weight-bold text-secondary">Producción</label>
                <input type="text" class="form-control" name="produccion"><br>
            </div>
            <div class="col-md-6">
                <label for="año" class="form-label font-weight-bold text-secondary">Año</label>
                <input type="text" class="form-control" name="año">
            </div>
            <div class="col-md-6">
                <label for="nacionalidad" class="form-label font-weight-bold text-secondary">Nacionalidad</label>
                <input type="text" class="form-control" name="nacionalidad"><br>
            </div>
            <div class="col-md-6">
                <label for="genero" class="form-label font-weight-bold text-secondary">Género</label><br>
                <select name="genero" class="form-select">
                    <option value="Comedia">Comedia</option>
                    <option value="Drama">Drama</option>
                    <option value="Terror">Terror</option>
                    <option value="Románticas">Románticas</option>
                    <option value="Suspenso">Suspenso</option>
                    <option value="Otras">Otras</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="duracion" class="form-label font-weight-bold text-secondary">Duración</label>
                <input type="text" class="form-control" name="duracion"><br>
            </div>
            <div class="col-md-6">
                <label for="restricciones" class="form-label font-weight-bold text-secondary">Restricciones de edad</label><br>
                    <input type="radio" name="restricciones" value="Apta para todo público"> <label class="form-label" for="atp">Todos los públicos</label>
                    <input type="radio" name="restricciones" value="Sólo para mayores de 7 años"> <label class="form-label" for="mayores7">Mayores de 7 años</label>
                    <input type="radio" name="restricciones" value="Sólo para mayores de 18 años"> <label class="form-label" for="mayores18">Mayores de 18 años</label>
            </div>
            <div class="col-12">
                <label for="sinopsis" class="form-label font-weight-bold text-secondary">Sinopsis</label>
                <textarea name="sinopsis" class="form-control"></textarea><br>
            </div>
            
            <div class="d-flex flex-row-reverse p-2">
                <button type="reset" class="btn btn-primary">Borrar</button>
                <input type="submit" class="btn btn-primary mx-2" value="Enviar">
            </div>

        </form>
    </div>
    </div>
    <div class="mt-4 p-5">
            <a href="../../../index.php" class="btn btn-secondary">Volver al menú</a>
    </div>
    <?php

    include_once("../estructura/footer.php");
    ?>    
</body>
</html>

<style>
    /* para los msjs del jquery */
    .error {
    color: #a94442;
    border-color: #ebccd1;
    padding:1px 20px 1px 20px;
    }
</style>