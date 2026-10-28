<?php

require_once 'Dispositivo.php';

class SensorTemperatura extends Dispositivo{
    private float $temperaturaAtual;

    public function __construct($nome, $fabricante, $numeroSerie, $temperaturaAtual){
        parent::__construct($nome, $fabricante, $numeroSerie);
        $this->temperaturaAtual = $temperaturaAtual;
    }

    public function mostrarTemperatura(){
        echo "Dispositivo: " . $this->nome . "<br>";
        echo "Temperatura atual: " . $this->temperaturaAtual . " °C<br>";
    }
}

?>
