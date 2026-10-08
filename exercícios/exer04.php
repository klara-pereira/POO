<?php

// criação da classe Pedido
class Pedido{

    // atributos
    public int $numero;
    public string $cliente;
    public float $valor;
    public string $status;

    // métodos
    public function adicionarItem($valor){
        $this->valor = $this->valor + $valor;
        echo "Item adicionado ao pedido.<br>";
        echo "Valor do item: R$ " . $valor . "<br>";
    }

    public function cancelar(){
        $this->status = "Cancelado";
        echo "O pedido foi cancelado.<br>";
    }

    public function finalizar(){
        $this->status = "Finalizado";
        echo "O pedido foi finalizado.<br>";
    }

    public function exibirResumo(){
        echo "Número: " . $this->numero . "<br>";
        echo "Cliente: " . $this->cliente . "<br>";
        echo "Valor: R$ " . $this->valor . "<br>";
        echo "Status: " . $this->status . "<br>";
    }
}


// criação do objeto pedido1
$pedido1 = new Pedido();

// colocando valores no pedido1
$pedido1->numero = 1;
$pedido1->cliente = "Klara";
$pedido1->valor = 50;
$pedido1->status = "Aguardando";


// criação do objeto pedido2
$pedido2 = new Pedido();

// colocando valores no pedido2
$pedido2->numero = 2;
$pedido2->cliente = "Maria";
$pedido2->valor = 80;
$pedido2->status = "Aguardando";


// exibindo informações do pedido1
echo "<h2>Pedido 1</h2>";

$pedido1->exibirResumo();

echo "<br>";

$pedido1->adicionarItem(30);

echo "<br>";

$pedido1->finalizar();

echo "<br>";

$pedido1->exibirResumo();

echo "<hr>";


// exibindo informações do pedido2
echo "<h2>Pedido 2</h2>";

$pedido2->exibirResumo();

echo "<br>";

$pedido2->adicionarItem(40);

echo "<br>";

$pedido2->cancelar();

echo "<br>";

$pedido2->exibirResumo();

?>