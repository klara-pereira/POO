<?php

class Carro{
    public function acelerar(){
        echo "O carro está acelerando...🚗";
    }
}

class CarroCombustao extends Carro{
    public function acelerar(){
        echo "<br>Injetando combustível...⛽";
    }
}

class CarroEletrico extends Carro{
    public function acelerar(){
        echo "<br>Enviando energia...🪫";
    }
}

$carro = new Carro();
$carro->acelerar();
$carro = new CarroCombustao();
$carro->acelerar();
$carro = new CarroEletrico();
$carro->acelerar();

?>