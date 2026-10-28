<?php

require_once 'Funcionario.php';

class Gerente extends Funcionario {
    private string $departamento;

    public function __construct($nome, $salario, $departamento) {
        parent::__construct($nome, $salario);
        $this->departamento = $departamento;
    }

    public function gerenciarEquipe() {
        echo "Gerente: " . $this->nome . "<br>";
        echo "Salário: R$ " . $this->getSalario() . "<br>";
        echo "Departamento: " . $this->departamento;
    }
}

?>