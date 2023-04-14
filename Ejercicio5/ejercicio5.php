<?php

function sumatoria_a($array){

    $suma = 0;

    for($i=0; $i< count($array) ;$i++){
        $suma += $array[$i];
    }

    echo "<h5>For común:</h5><br>
          <p>El resultado de la suma es: $suma</p>";
}

function sumatoria_b($array){

    $suma=0;

    foreach ($array as $valor){
        $suma += $valor;
    }
    echo "<h5>Foreach:</h5><br>
          <p>El resultado de la suma es: $suma</p>";
}

function sumatoria_c($array){

    $suma=0;
    $i=0;

    while( $i < count($array) ){
        $suma += $array[$i];
        $i++;
    }

    echo "<h5>While:</h5><br>
          <p>El resultado de la suma es: $suma</p>";
}