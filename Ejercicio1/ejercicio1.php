<?php
function semaforo_a($color){

    echo "<h5>IF / ELSE:</h5>";

    if ($color == "rojo") {

        echo "<p>Usted ingreso el color $color: frene</p>";

    } else if ($color == "amarillo") {
        echo "<p>Usted ingreso el color $color: precaución</p>";

    } else if ($color == "verde") {
        echo "<p>Usted ingreso el color $color: avance</p>";

    } else {
        echo "<p>Usted ingreso el color $color: estado desconocido</p>";
    }
}

function semaforo_b($color){

    $resultado = "";

    $color == "verde" ? $resultado="<p>Usted ingreso el color $color= avance</p>" :

        ($color == "amarillo" ? $resultado="<p>Usted ingreso el color $color= precaución</p>":

            ($color== "rojo" ? $resultado="<p>Usted ingreso el color $color= frene</p>" :

                $resultado= "<p>Usted ingreso el color $color= estado desconocido</p>"));

    echo "<h5>INLINE:</h5>" . $resultado ;
}

function semaforo_c($color){

    echo "<h5>SWITCH:</h5>";

    switch ($color){

        case "rojo":
            echo "<p>Usted ingreso el color $color: frene</p>";
            break;

        case "amarillo":
            echo "<p>Usted ingreso el color $color: precaución</p>";
            break;

        case "verde":
            echo "<p>Usted ingreso el color $color: avance</p>";
            break;

        default:
            echo "<p>Usted ingreso el color $color: estado desconocido</p>";
            break;
    }
}












