
<?php

class Pessoa{
    protected string $nome;
    private int $idade;

    public function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function apresentar(){
        echo 'Olá! Meu nome é ' . $this->nome;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function exibirInformacoes(){
        echo 'Nome: ' . $this->nome . '<br>';
        echo 'Idade: ' . $this->idade . '<br>';
    }
}

?>