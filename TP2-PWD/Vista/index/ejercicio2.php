<?php
$Titulo = "Ejercicio 2";
include_once("../estructura/header.php");
?>

<div class="p-5">

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Consigna</h4>
            <p class="card-text">
                Seleccionar una de las librerias e implementar la validación de los siguientes ejercicios:<br>
                • Realizar la validación de los formularios creados en el TP 2: HTML-PHP. Chequear
                que se hayan cargado todos los datos necesarios antes de ser enviados al servidor
                y que sean del tipo correcto.
            </p>
        </div>
    </div>
</div>

<div class="px-5 pb-5">

    <div class="card">
        <div class="card">
            <div class="card-header">
                <h1 class="h4">Ejercicio 1.1</h1>
            </div>
            <div class="card-body">
                <p>Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
                    llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número
                    enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
                    respuesta, que permita volver a la página anterior.
                </p>
                <h5 class="my-3">Ingrese un número</h5>

                <!--el novalidate desactiva la validaciones de html5 para probar jquery -->
                <form id="formEj1" name="formEj1" method="get" action="../Action/ej2/actionEj2-1.php">
                    <div class="form-group">
                        <label for="numeroform">Número:</label>
                        <!-- Input para solicitar el número -->
                        <input name="numeroform" type="text" class="form-control">
                    </div>
                    <br />
                    <!-- Botón para enviar el formulario -->
                    <input type="submit" class="btn btn-primary mx-2" value="Enviar">
                </form>
            </div>
        </div>
    </div>
</div>

<div class="px-5 pb-5">
    <div class="card">
        <div class="card-header">
            <h1 class="h4">Ejercicio 1.2</h1>
        </div>
        <div class="card-body">
            <p>
                Crear una página PHP que contenga un formulario HTML que permita ingresar las horas
                de cursada, de la materia Programación Web Dinámica, por cada día de la semana.
                Enviar los datos del formulario por el método GET a otra página PHP que los reciba y
                complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que
                se cursan por semana.
            </p>

            <h5 class="my-3">Ingrese las Horas de Cursada</h5>
            <form id="formEj2" name="formEj2" method="get" action="../Action/ej2/actionEj2-2.php">
                <div class="row row-cols-2">
                    <div class="mb-3">
                        <label for="lunes">Lunes:</label>
                        <input name="lunes" type="number" id="lunes" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="martes">Martes:</label>
                        <input name="martes" type="number" id="martes" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="miercoles">Miércoles:</label>
                        <input name="miercoles" type="number" id="miercoles" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="jueves">Jueves:</label>
                        <input name="jueves" type="number" id="jueves" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="viernes">Viernes:</label>
                        <input name="viernes" type="number" id="viernes" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="sabado">Sábado:</label>
                        <input name="sabado" type="number" id="sabado" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="domingo">Domingo:</label>
                        <input name="domingo" type="number" id="domingo" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Aceptar</button>
            </form>
        </div>
    </div>
</div>
</div>

<div class="px-5 pb-5">
    <div class="card">
        <card class="card-header">
            <h1 class="h4">Ejercicio 1.3-1.6</h1>
        </card>
        <card class="card-body">
            <p>
                Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes
                deportes que practica un alumno (fútbol, básquet, tenis, vóley). Mostrar en la página
                que procesa el formulario la cantidad de deportes que practica.
            </p>
            <h5 class="my-3">Ingrese sus datos</h5>
            <form id="formEj6" name="formEj6" method="get" action="../Action/ej2/actionEj2-6.php">
                <div class="row row-cols-2">

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
                        <label for="sexo" class="form-label">Sexo:</label>
                        <div>
                            <input type="radio" id="masculino" name="sexo" value="Masculino" required>
                            <label for="masculino">Masculino</label>
                        </div>
                        <div>
                            <input type="radio" id="femenino" name="sexo" value="Femenino" required>
                            <label for="femenino">Femenino</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nivelEstudio" class="form-label">Nivel de Estudio:</label><br>
                        <div>
                            <input type="radio" id="noEstudios" name="nivelEstudio" value="1" required>
                            <label for="noEstudios">No tiene estudios</label>
                        </div>
                        <div>
                            <input type="radio" id="estudiosPrimarios" name="nivelEstudio" value="2">
                            <label for="estudiosPrimarios">Estudios primarios</label>
                        </div>
                        <div>
                            <input type="radio" id="estudiosSecundarios" name="nivelEstudio" value="3">
                            <label for="estudiosSecundarios">Estudios secundarios</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="deportes" class="form-label">Deportes que practica:</label>
                        <div>
                            <input type="checkbox" id="futbol" name="deportes[]" value="Fútbol">
                            <label for="futbol">Fútbol</label>
                        </div>
                        <div>
                            <input type="checkbox" id="basket" name="deportes[]" value="Basket">
                            <label for="basket">Basket</label>
                        </div>
                        <div>
                            <input type="checkbox" id="tennis" name="deportes[]" value="Tennis">
                            <label for="tennis">Tennis</label>
                        </div>
                        <div>
                            <input type="checkbox" id="voley" name="deportes[]" value="Voley">
                            <label for="voley">Voley</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
    </div>
    </card>
</div>
</div>

<div class="px-5 pb-5">
    <div class="card">
        <div class="card-header">
            <h4>Ejercicio 1.7</h4>
        </div>
        <div class="card-body">
            <p>
                Crear una página con un formulario que contenga dos input de tipo text y un select. En
                los inputs se ingresarán números y el select debe dar la opción de una operación
                matemática que podrá resolverse usando los números ingresados. En la página que
                procesa la información se debe mostrar por pantalla la operación seleccionada, cada
                uno de los operandos y el resultado obtenido de resolver la operación.
            </p>
            <h5 class="my-3">Operaciones Matemáticas</h5>
            <form id="formEj7" name="formEj7" method="get" action="../Action/ej2/actionEj2-7.php">
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
    </div>
</div>

<div class="px-5 pb-5">
    <div class="card">
        <div class="card-header">
            <h4>Ejercicio 1.8</h4>
        </div>
        <div class="card-body">
            <p>
                La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en
                función de la edad y de la condición de estudiante del cliente. Desea que sean los propios
                clientes los que puedan calcular el valor de sus entradas a través de una página web. Si
                es estudiante o menor de 12 años, el precio es de $160; si es estudiante y mayor o igual
                a 12 años, el precio es de $180; en cualquier otro caso, el precio es de $300. Diseñar un
                formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con
                un botón, enviar los datos a un script encargado de realizar el cálculo y visualizarlo.
                Agregar un botón para limpiar el formulario y volver a consultar.
            </p>
            <h5 class="my-3">Calcula el Precio de tu Entrada</h5>
            <form id="formEj8" name="formEj8" method="get" action="../Action/ej2/actionEj2-8.php">
                <div class="mb-3">
                    <label for="edad" class="form-label">Edad:</label>
                    <input name="edad" type="number" id="edad" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="estudiante" class="form-label">¿Eres estudiante?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="estudiante" id="estudiante_si" value="si" required>
                        <label class="form-check-label" for="estudiante_si">Sí</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="estudiante" id="estudiante_no" value="no" required>
                        <label class="form-check-label" for="estudiante_no">No</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Calcular</button>
                <button type="reset" class="btn btn-secondary">Limpiar</button>
            </form>
        </div>
    </div>
</div>

<?php include_once("../estructura/footer.php"); ?>
</body>

</html>

<style>
    /* para los msjs del jquery */
    .error {
        color: #a94442;
        border-color: #ebccd1;
        padding: 1px 20px 1px 20px;
    }
</style>
