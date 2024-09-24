<?php
$Titulo = "Ejercicio 3";
include_once("../estructura/header.php");
?>

<div class="container my-5">
    <div class="card">
        <div class="card-header">
            <h1 class="h4">Consigna</h1>
        </div>
        <div class="card-body">

        <p>Agregue al formulario creado en el ejercicio 10 del práctico 2 un input file que les permita adjuntar la imagen
            de la película que se está cargando. Cuando se envíe el formulario, se deberá guardar la imagen y luego
            mostrarla junto con la información cargada en el formulario.
        </p>
        </div>

    </div>
</div>

<div class="container w-100 p-0">
    <div class="container w-100 m-0 p-0">
    <h4 class="navbar-expand mt-5 px-3 py-2 bg-light text-primary font-weight-bold" style="margin-top: 5px; margin: 0; background-image: linear-gradient(#fcfcfc, #e3e3e3); border: 1px solid #e8e8e8;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg> Cinem@s</h4>
    </div>
    <div class="container p-5 mb-5 border border-muted w-100">
        <form class="row g-3" id="formularioCinemas" name="formularioCinemas" method="post" action="../Action/actionEj3.php" enctype="multipart/form-data">
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
                <input type="text" class="form-control" name="ano">
            </div>
            <div class="col-md-6">
                <label for="nacionalidad" class="form-label font-weight-bold text-secondary">Nacionalidad</label>
                <input type="text" class="form-control" name="nacionalidad"><br>
            </div>
            <div class="col-md-6">
                <label for="genero" class="form-label font-weight-bold text-secondary">Género</label><br>
                <select name="genero" class="form-select">
                    <option value="comedia">Comedia</option>
                    <option value="drama">Drama</option>
                    <option value="terror">Terror</option>
                    <option value="romanticas">Románticas</option>
                    <option value="suspenso">Suspenso</option>
                    <option value="otras">Otras</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="duracion" class="form-label font-weight-bold text-secondary">Duración</label>
                <input type="text" class="form-control" name="duracion"><br>
            </div>
            <div class="col-md-6">
            <fieldset class="form-group">
                        <legend class="col-form-label">Restricción de Edad:</legend>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="restriccion" id="todosPublicos" value="Todos los públicos" required>
                            <label class="form-check-label" for="todosPublicos">Todos los públicos</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="restriccion" id="mayores7" value="Mayores de 7 años" required>
                            <label class="form-check-label" for="mayores7">Mayores de 7 años</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="restriccion" id="mayores18" value="Mayores de 18 años" required>
                            <label class="form-check-label" for="mayores18">Mayores de 18 años</label>
                        </div>
                    </fieldset>
            </div>
            <div class="col-12">
                <label for="sinopsis" class="form-label font-weight-bold text-secondary">Sinopsis</label>
                <textarea name="sinopsis" class="form-control"></textarea><br>
            </div>
            <div class="col-12">
            <label for="imagen" class="form-label">Imagen de la Película:</label>
            <input name="imagen" type="file" id="imagen" class="form-control" accept="image/*">
            </div>
            
            <div class="d-flex flex-row-reverse p-2">
                <button type="reset" class="btn btn-primary">Borrar</button>
                <input type="submit" class="btn btn-primary mx-2" value="Enviar">
            </div>

        </form>
    </div>
    </div>

    <div class="mt-4 p-5">
        <a href="../../../Menu.php" class="btn btn-secondary">Volver al menú</a>
    </div>
    <?php

    include_once("../estructura/footer.php");
    ?>  

</body>
</html>