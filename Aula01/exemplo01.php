<?php

// criação de classe no php
class Carro{
    // atributos
    public string $modelo;
    public string $cor;
    public string $marca;
    public float $velocidade;
    public bool $temTetoSolar;

    // metodos
    public function ligar(){
        echo "O carro ligou ...";
    }

    public function acelerar($velocidadeCarro){
        $this->velocidade = $this->velocidade + $velocidadeCarro;
        echo "<br>O carro acelerou<br>";
        echo "Velocidade do carro:" . $this->velocidade . "Km/h<br>";
    }

    public function frear($frearCarro){
     $this->velocidade = $this->velocidade - $frearCarro;

     if($this->velocidade < 0){
        $this->velocidade = 0;
     }

     echo "O carro freou<br>";
     echo "Velocidade do carro: " . $this->velocidade . "Km/h<br>";
    }

    public function desligar(){
        while($this->velocidade > 0){
            $this->frear(10);
        }

        echo "O carro foi desligado.";
    }
}

// criação de objeto da classe carro
$carro1 = new Carro();

// colocando valores no objeto carro1
$carro1-> modelo = 'Astra';
$carro1-> cor = 'Preto';
$carro1-> marca = 'Chevrolet';
$carro1-> velocidade = 0;
$carro1-> temTetoSolar = false;

// printar o valor do  carro1
//var_dump($carro1);

// criando objeto carro2
$carro2 = new Carro();

// colocando atributos no objeto carro2
$carro2-> modelo = 'Chevette';
$carro2-> cor = 'Roxo';
$carro2-> marca = 'Chevrolet';
$carro2-> velocidade = 0;
$carro2-> temTetoSolar = true;

//var_dump($carro2);

// exibindo informações do objeto carro1
echo "<p>Modelo do carro 1:" . $carro1-> modelo . "</p>";
echo "<p>Cor do carro 1:" . $carro1-> cor . "</p>";
echo "<p>Marca do carro 1:" . $carro1-> marca . "</p>";
echo "<p>Velocidade do carro 1: <b>" . $carro1->velocidade . " Km/h</b></p>";
echo "<p>Tem Teto Solar o carro 1:" . ($carro1->temTetoSolar ? 'Tem teto solar' : 'Não tem teto solar'). "</p>";
$carro1->ligar();
//chamando o metodo e acelerar o objeto carro 1
$carro1->acelerar(50);
$carro1->acelerar(100);

$carro1->frear(50);
$carro1->desligar();

echo "<hr>";

echo "<p>Modelo do carro 2:" . $carro2-> modelo . "</p>";
echo "<p>Cor do carro 2:" . $carro2-> cor . "</p>";
echo "<p>Marca do carro 2:" . $carro2-> marca . "</p>";
echo "<p>Velocidade do carro 2: <b>" . $carro2->velocidade . " Km/h</b></p>";
echo "<p>Tem Teto Solar o carro 2:" . ($carro2->temTetoSolar ? 'Tem teto solar' : 'Não tem teto solar').  "</p>";


//metodos do carro 2
$carro2->ligar();

$carro2->acelerar(80);
$carro2->acelerar(80);

$carro2->frear(60);
$carro2->desligar();