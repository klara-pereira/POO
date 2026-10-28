<?php

abstract class Funcionario{
    protected string $nome;

    public function __construct($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    abstract public function calcularSalario();
}

class FuncionarioFixo extends Funcionario{
    private float $salarioMensal;

    public function __construct($nome, $salarioMensal){
        parent::__construct($nome);
        $this->salarioMensal = $salarioMensal;
    }

    public function calcularSalario(){
        return $this->salarioMensal;
    }
}

class FuncionarioComissionado extends Funcionario{
    private float $salarioBase;
    private float $vendas;

    public function __construct($nome, $salarioBase, $vendas){
        parent::__construct($nome);
        $this->salarioBase = $salarioBase;
        $this->vendas = $vendas;
    }

    public function calcularSalario(){
        return $this->salarioBase + ($this->vendas * 0.10);
    }
}

$funcionario1 = new FuncionarioFixo("Carlos", 2500);
$funcionario2 = new FuncionarioComissionado("Ana", 1800, 8000);

echo "Funcionário fixo: " . $funcionario1->getNome();
echo "<br>Salário: R$ " . number_format($funcionario1->calcularSalario(), 2, ',', '.');

echo "<br><br>";

echo "Funcionário comissionado: " . $funcionario2->getNome();
echo "<br>Salário: R$ " . number_format($funcionario2->calcularSalario(), 2, ',', '.');

?>