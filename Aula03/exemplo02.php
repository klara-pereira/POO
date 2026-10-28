<?php

class Pessoa{
    protected string $nome = 'Klara🌷';
}

class Aluno extends Pessoa{
    public function apresentar(){
        echo 'Olá! Meu nome é ' . $this->nome;
    }
}

$aluno1 = new Aluno();
$aluno1->apresentar();

?>