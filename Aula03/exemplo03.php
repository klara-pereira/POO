<?php

class Pessoa{
    private string $nome = 'Klara🌷';

    public function getNome(){
        return $this->nome;
    }
}

class Aluno extends Pessoa{
    public function apresentar(){
        echo 'Olá! Meu nome é ' . $this->getNome();
    }
}

$aluno1 = new Aluno();
$aluno1->apresentar();

?>