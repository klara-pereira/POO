<?php

class Pessoa{
    public function apresentar(){
        echo 'Olá! Eu sou uma pessoa 👻';
    }
}

class Aluno extends Pessoa{
}

$aluno1 = new aluno();
$aluno1->apresentar();

?>