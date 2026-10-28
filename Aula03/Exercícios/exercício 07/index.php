<?php

require_once 'ContaCorrente.php';
require_once 'ContaPoupanca.php';

$contaCorrente = new ContaCorrente("Carlos", 1000, "123456");

$contaCorrente->depositar(500);
$contaCorrente->sacar(200);

echo "Conta Corrente";
$contaCorrente->mostrarCartao();

echo "Saldo final: R$ " . number_format($contaCorrente->getSaldo(), 2, ',', '.') ;

echo "<br><hr>";

$contaPoupanca = new ContaPoupanca("Ana", 800, "Comprar uma casa");

echo "Conta Poupança";
$contaPoupanca->mostrarObjetivo();

?>