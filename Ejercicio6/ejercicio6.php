<?php

class Saludar {

    //variables
    private $nombre;
    private $apellido;

    //constructor
    public function __construct($nombre, $apellido){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }


    //getters y setters
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function saludoFormal($horario){

        $mensaje = "";

        if($horario < 25 && $horario >= 0 ){

            switch ($horario){

                case ($horario > 4 && $horario < 13):
                    $mensaje = "Buenos días " . $this->getNombre() . " " . $this->getApellido();
                    break;

                case ($horario > 12 && $horario < 21):
                    $mensaje = "Buenos tardes " . $this->getNombre() . " " . $this->getApellido();
                    break;

                default:
                    $mensaje = "Buenos noches " . $this->getNombre() . " " . $this->getApellido();
                    break;
            }

        }
        else{
            $mensaje = "El horario debe ser entre las 0 y las 24 hs";
        }

        echo "<p>$mensaje</p>";

    }

}