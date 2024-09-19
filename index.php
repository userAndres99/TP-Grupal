<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Ejercicios</title>
    <!--  enlace a Bootstrap para estilizar el menu-->
    <link href="../TP-Grupal/Vista/css/bootstrap.min.css" rel="stylesheet">
        <!-- Incluir jQuery -->
        <script src="./Vista/js/jquery-3.7.1.js"></script>
    <script src="./Vista/js/bootstrap.bundle.min.js"></script>
    <script defer>
        // inicializo tooltip
        $(document).ready(function(){
            $('[data-bs-toggle="tooltip"]').tooltip();
        });
    </script>
</head>

<body class="bg-light" style="margin-bottom: 60px;">

    <nav class="navbar navbar-expand-lg bg-gradient shadow">
        <div class="container-fluid">
            <a class="navbar-brand text-primary m-2 h1" href="#">TP4G1 - INFOAUTOS</a>

            <header class="d-flex justify-content-center py-3">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="./Vista/index/buscarAuto.php" class="nav-link" data-bs-toggle="tooltip" 
                    title="Crear una pagina 'buscarAuto.php' que contenga un formulario en donde se solicite el numero
                    de patente de un auto, estos datos deberán ser enviados a una pagina 'accionBuscarAuto.php' en donde
                    usando la clase de control correspondiente, se soliciten los datos completos del auto que se corresponda con
                    la patente ingresada y mostrar los datos en una tabla. También deberán mostrar los carteles que crean
                    convenientes en caso de que no se encuentre ningún auto con la patente ingresada">Buscar un auto</a></li>

                    <li class="nav-item"><a href="./Vista/index/BuscarPersona.php" class="nav-link" data-bs-toggle="tooltip" 
                    title="Crear una página 'BuscarPersona.html' que contenga un formulario que permita cargar un
                    numero de documento de una persona. Estos datos serán enviados a una página 'accionBuscarPersona.php'
                    busque los datos de la persona cuyo documento sea el ingresado en el formulario los muestre en un nuevo
                    formulario; a su vez este nuevo formulario deberá permitir modificar los datos mostrados (excepto el nro de
                    documento) y estos serán enviados a otra página “ActualizarDatosPersona.php” que actualiza los datos de la
                    persona">Buscar una persona</a></li>

                    <li class="nav-item"><a href="./Vista/index/listaPersonas.php" class="nav-link" data-bs-toggle="tooltip" 
                    title="Crear una página 'listaPersonas.php' que muestre un listado con las personas que se
                    encuentran cargadas y un link a otra página “autosPersona.php” que recibe un dni de una persona y muestra
                    los datos de la persona y un listado de los autos que tiene asociados">Ver personas</a></li>

                    <li class="nav-item"><a href="./Vista/index/VerAutos.php" class="nav-link" data-bs-toggle="tooltip" 
                    title="Crear una pagina php “VerAutos.php”, en ella usando la capa de control correspondiente 
                    mostrar todos los datos de los autos que se encuentran cargados, de los dueños mostrar nombre y apellido.
                    En caso de que no se encuentre ningún auto cargado en la base mostrar un mensaje indicando que no hay
                    autos cargados">Ver autos</a></li>

                    <li class="nav-item"><a href="./Vista/index/NuevaPersona.php" class="nav-link" data-bs-toggle="tooltip" 
                    title=" Crear una página 'NuevaPersona.php' que contenga un formulario que permita solicitar todos
                    los datos de una persona. Estos datos serán enviados a una página 'accionNuevaPersona.php' que cargue
                    un nuevo registro en la tabla persona de la base de datos. Se debe mostrar un mensaje que indique si se
                    pudo o no cargar los datos de la persona">Añadir persona</a></li>

                    <li class="nav-item"><a href="./Vista/index/NuevoAuto.php" class="nav-link" data-bs-toggle="tooltip" 
                    title="Crear una página 'NuevoAuto.php' que contenga un formulario en el que se permita cargar
                    todos los datos de un auto (incluso su dueño). Estos datos serán enviados a una página
                    'accionNuevoAuto.php' que cargue un nuevo registro en la tabla auto de la base de datos. Se debe chequear
                    antes que la persona dueña del auto ya se encuentre cargada en la base de datos, de no ser así mostrar un
                    link a la página que permite carga una nueva persona. Se debe mostrar un mensaje que indique si se pudo o
                    no cargar los datos">Añadir auto</a></li>

                    <li class="nav-item"><a href="./Vista/index/CambioDuenio.php" class="nav-link" data-bs-toggle="tooltip" 
                    title="Crear una página “CambioDuenio.php” que contenga un formulario en donde se solicite el
                    numero de patente de un auto y un numero de documento de una persona, estos datos deberán ser enviados
                    a una página “accionCambioDuenio.php” en donde se realice cambio del dueño del auto de la patente
                    ingresada en el formulario. Mostrar mensajes de error en caso de que el auto o la persona no se encuentren
                    cargados">Cambiar titular de auto</a></li>
                </ul>
                <style>
                    .tooltip-inner {
                       background-color: #3498db; /* Cambia este valor al color que desees */
                        color: white; /* Cambia el color del texto si es necesario */
                    }
                </style>
            </header>
        </div>
    </nav>
    <div class="container d-flex align-items-center justify-content-center my-5">

    <div class="d-flex p-2 align-items-center, justify-content-center mx-auto my-5">
        <img class="card-img-top mx-5" style="height: 450px; width: auto;" src="https://sipcosystems.com/images/web-application-development.png" alt="Card image cap">
        <div class="card-body">
            <h1 class="card-title mt-5">TP4 - GRUPO 1</h1>
            <p class="card-text h5 pt-2 pb-4 mb-5">Programación Dinámica 2024 - Universidad Nacional del Comahue</p>
            <p class="card-text h4 pb-4">Integrantes<br>ALIAS, Paula Victoria<br>MARCHANDON GUTIERREZ, Diego Patricio<br>MENARD, Andres Esteban</p>
        </div>
</div>
    </div>

    <footer class="bg-body-tertiary text-center text-lg-start fixed-bottom">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    Universidad Nacional del Comahue 
    <a href="https://github.com/userAndres99/TP-Grupal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
  <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
</svg></a> 2024
  </div>
  <!-- Copyright -->
</footer>

</body>

