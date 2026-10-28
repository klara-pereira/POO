<?php

abstract class Eletrodomestico {
    protected $marca;

    public function __construct($marca) {
        $this->marca = $marca;
    }

    public function getMarca() {
        echo $this->marca;
    }

    abstract public function ligar();
}

class Televisao extends Eletrodomestico {
    public function ligar() {
        echo "Ligando a tela...<br>";
    }
}

class Geladeira extends Eletrodomestico {
    public function ligar() {
        echo "Iniciando o sistema de refrigeração...<br>";
    }
}

$tv = new Televisao("Samsung");
$geladeira = new Geladeira("Brastemp");

echo "Marca da TV: ";
$tv->getMarca();
echo "<br>";
$tv->ligar();

echo "Marca da Geladeira: ";
$geladeira->getMarca();
echo "<br>";
$geladeira->ligar();

?>