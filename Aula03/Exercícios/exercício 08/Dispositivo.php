<?php

class Dispositivo{
    protected string $nome;
    protected string $fabricante;
    private string $numeroSerie;

    public function __construct($nome, $fabricante, $numeroSerie){
        $this->nome = $nome;
        $this->fabricante = $fabricante;
        $this->numeroSerie = $numeroSerie;
    }

    public function apresentarDispositivo(){
        echo "Nome: " . $this->nome . "<br>";
        echo "Fabricante: " . $this->fabricante . "<br>";
    }

    public function getNumeroSerie(){
        return $this->numeroSerie;
    }
}

?>
