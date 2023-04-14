<?php

function incrementar($numero){

    if( $numero == 0 ){
        echo "<p>El valor Incrementado es:</p>";
    }
    else{
        echo "  <p>El valor ingresado es: $numero</p>";

        $numero++;

        $valorIncrementado = $numero;

        echo "<p>El valor Incrementado es: $valorIncrementado</p>";
    }
}