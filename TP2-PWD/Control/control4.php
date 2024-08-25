<?php

class Pelicula{

    public function leerPelicula($datos){
        extract($datos);
        if ($restricciones == "atp"){
            $restriccion = "Todos los públicos";
        } elseif ($restricciones == "mayores7"){
            $restriccion = "Mayores de 7 años";
        } else $restriccion = "Mayores de 18 años";

        return "<b>Titulo:</b> $titulo <br>
        <b>Actores:</b> $actores<br>
        <b>Director:</b> $director<br>
        <b>Guión:</b> $guion<br>
        <b>Producción:</b> $produccion<br>
        <b>Año:</b> $año<br>
        <b>Nacionalidad:</b> $nacionalidad<br>
        <b>Género:</b> $genero<br>
        <b>Duración:</b> $duracion<br>
        <b>Restricciones de edad:</b> $restriccion<br>";
    }

}