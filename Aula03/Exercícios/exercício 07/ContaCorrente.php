<?php

require_once 'ContaBancaria.php';

class ContaCorrente extends ContaBancaria{
    private string $numeroCartao;

    public function __construct($titular, $saldo, $numeroCartao){
        parent::__construct($titular, $saldo);
        $this->numeroCartao = $numeroCartao;
    }

    public function mostrarCartao(){
        echo "Titular: " . $this->titular . "<br>";
        echo "Cartão: " . $this->numeroCartao . "<br>";
        echo "Saldo: R$ " . number_format($this->getSaldo(), 2, ',', '.') . "<br>";
    }
}

?>