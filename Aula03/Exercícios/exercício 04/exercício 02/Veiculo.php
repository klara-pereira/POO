<?php

class Veiculo{
    protected string $marca;
    private int $ano;

    public function __construct($marca, $ano){
        $this->marca = $marca;
        $this->ano = $ano;
    }

    public function apresentarVeiculo(){
        echo "Marca: " . $this->marca . "<br>";
    }

    public function getAno(){
        return $this->ano;
    }
}

?>