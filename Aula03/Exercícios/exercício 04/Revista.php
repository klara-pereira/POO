<?php

require_once 'Publicacao.php';

class Revista extends Publicacao{
    private int $edicao;

    public function __construct($titulo, $anoPublicacao, $edicao){
        parent::__construct($titulo, $anoPublicacao);
        $this->edicao = $edicao;
    }

    public function mostrarRevista(){
        $this->mostrarTitulo();
        echo "Ano: " . $this->getAnoPublicacao() . "<br>";
        echo "Edição: " . $this->edicao . "<br>";
    }
}

?>