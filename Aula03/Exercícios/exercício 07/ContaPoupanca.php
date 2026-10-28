<?php

require_once 'ContaBancaria.php';

class ContaPoupanca extends ContaBancaria{
    private string $objetivoPoupanca;

    public function __construct($titular, $saldo, $objetivoPoupanca){
        parent::__construct($titular, $saldo);
        $this->objetivoPoupanca = $objetivoPoupanca;
    }

    public function mostrarObjetivo(){
        echo "Titular: " . $this->titular . "<br>";
        echo "Objetivo da poupança: " . $this->objetivoPoupanca . "<br>";
        echo "Saldo: R$ " . number_format($this->getSaldo(), 2, ',', '.') . "<br>";
    }
}

?>