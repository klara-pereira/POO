<?php

require_once 'Dispositivo.php';

class SensorUmidade extends Dispositivo{
    private float $umidadeAtual;

    public function __construct($nome, $fabricante, $numeroSerie, $umidadeAtual){
        parent::__construct($nome, $fabricante, $numeroSerie);
        $this->umidadeAtual = $umidadeAtual;
    }

    public function mostrarUmidade(){
        echo "Dispositivo: " . $this->nome . "<br>";
        echo "Umidade atual: " . $this->umidadeAtual . "%<br>";
    }
}

?>
