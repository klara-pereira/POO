<?php

// criação da classe Conta Bancária
class ContaBancaria{

    // atributos
    public string $titular;
    public string $numero;
    public float $saldo;
    public string $tipo;

    // métodos
    public function depositar($valor){
        $this->saldo = $this->saldo + $valor;
        echo "Depósito realizado com sucesso.<br>";
        echo "Valor depositado: R$ " . $valor . "<br>";
    }

    public function sacar($valor){
        $this->saldo = $this->saldo - $valor;
        echo "Saque realizado com sucesso.<br>";
        echo "Valor sacado: R$ " . $valor . "<br>";
    }

    public function consultarSaldo(){
        echo "<br>Saldo atual: R$ " . $this->saldo . "<br>";
    }
}


// criação do objeto conta1
$conta1 = new ContaBancaria();

// colocando valores na conta1
$conta1->titular = "Vera Alecrim";
$conta1->numero = "001";
$conta1->saldo = 5500;
$conta1->tipo = "Corrente";


// criação do objeto conta2
$conta2 = new ContaBancaria();

// colocando valores na conta2
$conta2->titular = "Roseli Rodrigues";
$conta2->numero = "002";
$conta2->saldo = 4050;
$conta2->tipo = "Poupança";


// exibindo informações da conta1
echo "<b><p>Conta 1</b></p>";

echo "Titular: " . $conta1->titular . "<br>";
echo "Número: " . $conta1->numero . "<br>";
echo "Tipo: " . $conta1->tipo . "<br>";

$conta1->consultarSaldo();
$conta1->depositar(200);
$conta1->sacar(100);
$conta1->consultarSaldo();

echo "<hr>";


// exibindo informações da conta2
echo "<b><p>Conta 2</b></p>";

echo "Titular: " . $conta2->titular . "<br>";
echo "Número: " . $conta2->numero . "<br>";
echo "Tipo: " . $conta2->tipo . "<br>";

$conta2->consultarSaldo();
$conta2->depositar(300);
$conta2->sacar(150);
$conta2->consultarSaldo();

?>