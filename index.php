<?php
include_once('Ejercicio1/ejercicio1.php');
include_once('Ejercicio2/ejercicio2.php');
include_once('Ejercicio3/ejercicio3.php');
include_once('Ejercicio4/ejercicio4.php');
include_once('Ejercicio5/ejercicio5.php');
include_once('Ejercicio6/ejercicio6.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/style.css">

        <title>Ejercicios - Coco Matías Ariel</title>
    </head>

    <body>
        <main>

            <h1>Coco Matías Ariel</h1>

            <section class="ejercicio ejercicio-uno">

                <h2>Ejercicio 1: Semáforo</h2>

                <p>Cree una función llamada Semaforo, que recibe por parametro un cólor cómo texto (“rojo”
                    “amarillo”,”verde”). Dicha función devolverá el estado que corresponde: “frene”, “precaución”,
                    “avance” o “estado desconocido” ante un caso no esperado.
                    a) función semaforo_a($color): Resuelva la solución utilizando if else
                    b) función semaforo_b($color): Resuelva la solución utilizando if inline (return ?: )
                    c) función semaforo_c($color): Resuelva la solución utilizando switch
                </p>

                <form action="index.php" method="GET" enctype="application/x-www-form-urlencoded">

                    <label>Ingrese un color:</label>
                    <input class="ingreso-de-texto" placeholder="Ingrese rojo, amarillo o verde" type="text" name="color" required>
                    <input class="btn" type="submit" value="Enviar">

                </form>


                <div>
                    <?php
                        $color = isset($_GET['color']) ? strtolower($_GET['color']) : "";
                        semaforo_a($color);
                    ?>
                </div>


                <div>
                    <?php
                        $color = isset($_GET['color']) ? strtolower($_GET['color']) : "";
                        semaforo_b($color);
                    ?>
                </div>


                <div>
                    <?php
                        $color = isset($_GET['color']) ? strtolower($_GET['color']) : "";
                        semaforo_c($color);
                    ?>
                </div>

            </section>


            <section class="ejercicio ejercicio-dos">

                <h2>Ejercicio 2: Binomio cuadrado perfecto</h2>

                <p>
                    Cree una función llamada binomioCuadradoPerfecto que realice la ecuación de dicha problemática:<br>
                    recibe dos parámetros y devuelve el cuadrado de la suma de ambos (a+b)2
                    <br>
                    a) función binomioCuadradoPerfecto_a($a, $b): Resuelva la solución utilizando la función de
                    potencia
                    <br>
                    b) función binomioCuadradoPerfecto_b($a, $b): Resuelva la solución utilizando la fórmula
                    desarrollada del binomio: a2 + 2*a*b + b2

                </p>

                <form action="index.php" method="GET" enctype="application/x-www-form-urlencoded">

                    <label for="numero1">Ingrese el primer número:</label>
                    <input class="ingreso-de-texto" placeholder="Ingrese el primer número" type="number" name="numero1" id="numero1" required>

                    <label for="numero2">Ingrese el segundo número:</label>
                    <input class="ingreso-de-texto" placeholder="Ingrese el segundo número" type="number" name="numero2" id="numero2" required>

                    <input class="btn" type="submit" value="Enviar">

                </form>

                <div>
                    <?php
                    $num1 = isset($_GET['numero1']) ? $_GET['numero1'] : 0;
                    $num2 = isset($_GET['numero2']) ? $_GET['numero2'] : 0;

                    echo "<p>Los números ingresados fueron: $num1 y $num2</p>";
                    ?>

                </div>

                <div>

                    <?php
                        binomioCuadradoPerfecto_a($num1, $num2);
                    ?>

                </div>

                <div>

                    <?php
                        binomioCuadradoPerfecto_b($num1, $num2);
                    ?>

                </div>

            </section>

            <section class="ejercicio ejercicio-tres">

                <h2>Ejercicio 3: Concatenar textos</h2>

                <p>Cree una función concatenar($texto1, $texto2) que reciba dos textos como parámetro y devuelva
                    ambos textos concatenados como uno solo.
                </p>

                <form action="index.php" method="GET" enctype="application/x-www-form-urlencoded">

                    <label for="texto2">Ingrese el primer número:</label>
                    <input class="ingreso-de-texto prueba" placeholder="Ingrese el primer texto" type="text" name="texto1" required>

                    <label for="texto2">Ingrese el segundo número:</label>
                    <input class="ingreso-de-texto prueba" placeholder="Ingrese el segundo texto" type="text" name="texto2" required>

                    <input class="btn" type="submit" value="Enviar">

                </form>

                <div>
                    <?php
                    $texto1 = isset($_GET['texto1']) ? $_GET['texto1'] : "-";
                    $texto2 = isset($_GET['texto2']) ? $_GET['texto2'] : "-";

                    concatenar($texto1, $texto2);
                    ?>

                </div>

            </section>

            <section class="ejercicio ejercicio-cuatro">

                <h2>Ejercicio 4: Incrementar</h2>

                <p>
                    Cree una función llamada incrementar, que reciba una variable y sin devolver nada como retorno de
                    la función, el valor del parámetro haya sido incrementado en 1
                    (Ver pasaje de parámetros por referencia)
                </p>

                <form action="index.php" method="GET" enctype="application/x-www-form-urlencoded">

                    <label for="incrementar">Ingrese un número:</label>
                    <input class="ingreso-de-texto" placeholder="Ingrese un número" type="number" name="incrementar" id="incrementar" required>

                    <input class="btn" type="submit" value="Enviar">

                </form>

                <div>
                    <?php
                        $valor = isset($_GET['incrementar']) ? $_GET['incrementar'] : 0;
                        incrementar($valor);
                    ?>
                </div>

            </section>

            <section class="ejercicio ejercicio-cinco">

                <h2>Ejercicio 5: Sumatoria</h2>

                <p>
                    Cree una función sumatoria que reciba un vector cómo parámetro, y devuelva la suma de todos sus
                    valores.<br>
                    a) función sumatoria_a( $array ): Resuelva la solución utilizando la estructura de control for<br>
                    b) función sumatoria_b( $array ): Resuelva la solución utilizando la estructura for each<br>
                    c) función sumatoria_c( $array ): Resuelva la solución utilizando la estructura de control while<br>
                </p>

                <form enctype="application/x-www-form-urlencoded" action="index.php" method="GET">

                    <label for="num1">Ingrese el primer número a sumar:</label>
                    <input class="ingreso-de-texto" placeholder="Ingrese un número" type="number" name="num1" required>

                    <label for="num2">Ingrese el segundo número a sumar:</label>
                    <input class="ingreso-de-texto" placeholder="Ingrese un número" type="number" name="num2" required>

                    <label for="num3">Ingrese el tercer número a sumar:</label>
                    <input class="ingreso-de-texto" placeholder="Ingrese un número" type="number" name="num3" required>

                    <input class="btn" type="submit" value="Enviar">
                </form>

                <div>
                    <?php
                    $valor1 = isset($_GET['num1']) ? $_GET['num1'] : 0;
                    $valor2 = isset($_GET['num2']) ? $_GET['num2'] : 0;
                    $valor3 = isset($_GET['num3']) ? $_GET['num3'] : 0;
                    $array = array ($valor1, $valor2, $valor3);
                    sumatoria_a($array);
                    ?>
                </div>

                <div>
                    <?php
                    sumatoria_b($array);
                    ?>
                </div>

                <div>
                    <?php
                    sumatoria_c($array);
                    ?>
                </div>


            </section>


            <section class="ejercicio ejercicio-seis">

                <h2>EEjercicio 6: Nombre completo</h2>

                <p>
                    Cree una clase llamada Saludar, la misma tendrá un constructor que reciba nombre, apellido de una
                    persona.<br>
                    Dicha clase debe implementar el método saludoFormal( $horario ) el cual debe responder
                    concatenado al nombre un prefijo dependiendo del horario:<br>

                    05hs a 13hs “Buenos días”
                    13hs a 21hs “Buenas tardes”
                    21hs a 05hs “Buenas noches”<br>

                    Ej. para clase instanciada para Ezequiel Perez, y parámetro 9hs: “Buenos días Ezequiel Perez”
                    Dicha clase debe implementar también el método saludoInformal( $horario ) el cual debe responder
                    sin el apellido, iniciando con un “hola” por delante y al finalizar concatenar “que tengas un ...” saludo
                    perteneciente al horario .
                    <br>
                    Ej. para clase instanciada para Ezequiel Perez, y parámetro 9hs:
                    “¡Hola Ezequiel! Que tengas un buen día”
                </p>

                <form enctype="application/x-www-form-urlencoded" action="index.php" method="GET">

                    <label for="nombre">Ingrese su nombre:</label>
                    <input class="ingreso-de-texto" placeholder="Ingrese su nombre" type="text" name="nombre" required>

                    <label for="apellido">Ingrese su apellido:</label>
                    <input class="ingreso-de-texto" placeholder="Ingrese su apellido" type="text" name="apellido" required>

                    <label for="horario">Ingrese un horario:</label>
                    <input class="ingreso-de-texto" placeholder="Ingrese un horario" type="number" name="horario" required>

                    <input class="btn" type="submit" value="Enviar">
                </form>

                <div>
                    <?php
                    $nombre = isset($_GET['nombre']) ? $_GET['nombre'] : "nombre";

                    $apellido = isset($_GET['apellido']) ? $_GET['apellido'] : "apellido";

                    $horario = isset($_GET['horario']) ? $_GET['horario'] : 0;

                    $obj = new Saludar($nombre, $apellido);

                    $obj->saludoFormal($horario);
                    ?>
                </div>
            </section>

        </main>
    </body>
</html>
