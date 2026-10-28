<?php

require_once 'Veiculo.php';

class Carro extends Veiculo{
    private int $quantidadePortas;

    public function __construct($marca, $ano, $quantidadePortas){
        parent::__construct($marca, $ano);
        $this->quantidadePortas = $quantidadePortas;
    }

    public function mostrarCarro(){
        $this->apresentarVeiculo();
        echo "Ano: " . $this->getAno() . "<br>";
        echo "Quantidade de portas: " . $this->quantidadePortas . "<br>";
    }
}

?>