<?php

require_once 'Veiculo.php';

class Moto extends Veiculo{
    private int $cilindradas;

    public function __construct($marca, $ano, $cilindradas){
        parent::__construct($marca, $ano);
        $this->cilindradas = $cilindradas;
    }

    public function mostrarMoto(){
        $this->apresentarVeiculo();
        echo "Ano: " . $this->getAno() . "<br>";
        echo "Cilindradas: " . $this->cilindradas . "<br>";
    }
}

?>