<?php

class Publicacao{
    protected string $titulo;
    private int $anoPublicacao;

    public function __construct($titulo, $anoPublicacao){
        $this->titulo = $titulo;
        $this->anoPublicacao = $anoPublicacao;
    }

    public function mostrarTitulo(){
        echo "Título: " . $this->titulo . "<br>";
    }

    public function getAnoPublicacao(){
        return $this->anoPublicacao;
    }
}

?>
