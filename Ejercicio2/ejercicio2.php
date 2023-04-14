<?php
function binomioCuadradoPerfecto_a($a, $b){

    $resultado = pow(($a + $b), 2);

    echo "<p>El resultado de la función A es: $resultado</p>";
}

function binomioCuadradoPerfecto_b($a, $b){

    $resultado = pow($a,2) + (2 * $a * $b) + pow($b,2);

    echo "<p>El resultado de la función B es: $resultado</p>";
}