<?php

// criação da classe Celular
class Celular{

    // atributos
    public string $marca;
    public string $modelo;
    public string $cor;
    public float $bateria;
    public bool $ligado;

    // métodos
    public function ligar(){
        $this->ligado = true;
        echo "<br>O celular ligou.<br>";
    }

    public function desligar(){
        $this->ligado = false;
        echo "O celular desligou.<br>";
    }

    public function usar($consumo){
        $this->bateria = $this->bateria - $consumo;
        echo "O celular foi usado.<br>";
        echo "Bateria: " . $this->bateria . "%<br>";
    }

    public function carregar($carga){
        $this->bateria = $this->bateria + $carga;
        echo "O celular está carregando.<br>";
        echo "Bateria: " . $this->bateria . "%<br><br>";
    }
}


// criação do objeto celular1
$celular1 = new Celular();

// colocando valores no celular1
$celular1->marca = "Apple";
$celular1->modelo = "Iphone 13";
$celular1->cor = "Branco";
$celular1->bateria = 100;
$celular1->ligado = true;


// criação do objeto celular2
$celular2 = new Celular();

// colocando valores no celular2
$celular2->marca = "Apple";
$celular2->modelo = "Iphone 14";
$celular2->cor = "Preto";
$celular2->bateria = 70;
$celular2->ligado = false;


// exibindo informações do celular1
echo "<b><p>Celular 1</b></p>";

echo "Marca: " . $celular1->marca . "<br>";
echo "Modelo: " . $celular1->modelo . "<br>";
echo "Cor: " . $celular1->cor . "<br>";
echo "Bateria: " . $celular1->bateria . "%<br>";

$celular1->ligar();
$celular1->usar(20);
$celular1->carregar(10);
$celular1->desligar();

echo "<hr>";


// exibindo informações do celular2
echo "<b><p>Celular 2</b></p>";

echo "Marca: " . $celular2->marca . "<br>";
echo "Modelo: " . $celular2->modelo . "<br>";
echo "Cor: " . $celular2->cor . "<br>";
echo "Bateria: " . $celular2->bateria . "%<br>";

$celular2->ligar();
$celular2->usar(30);
$celular2->carregar(20);
$celular2->desligar();

?>