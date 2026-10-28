<?php

require_once 'Animal.php';

class Cachorro extends Animal{
    private string $raca;

    public function __construct($nome, $idade, $raca){
        parent::__construct($nome, $idade);
        $this->raca = $raca;
    }

    public function latir(){
        $this->mostrarNome();
        echo "Idade: " . $this->getIdade() . " anos<br>";
        echo "Raça: " . $this->raca . "<br>";
        echo "Au au! Au au!<br>";
    }
}

?>