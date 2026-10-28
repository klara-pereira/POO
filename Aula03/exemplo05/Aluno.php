<?php

require_once 'Pessoa.php';

class Aluno extends Pessoa{
    private string $curso;

    public function __construct($nome, $idade, $curso){
        parent:: __construct($nome, $idade);
        $this->curso = $curso;
    }

    // public function exibirInformacoes(){
    //     echo 'Nome: ' . $this->nome . ' | Idade : ' . $this->getIdade() . '| Curso: ' . $this->curso;
    // }

    public function exibirCurso(){
        echo 'Curso: ' . $this->curso .  '<br>';
    }
}

?>