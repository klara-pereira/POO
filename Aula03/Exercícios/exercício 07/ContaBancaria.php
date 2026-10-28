<?php

class ContaBancaria{
    protected string $titular;
    private float $saldo;

    public function __construct($titular, $saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function depositar($valor){
        if($valor > 0){
            $this->saldo += $valor;
        }
    }

    public function sacar($valor){
        if($valor > 0 && $valor <= $this->saldo){
            $this->saldo -= $valor;
        }
    }

    public function getSaldo(){
        return $this->saldo;
    }
}

?>