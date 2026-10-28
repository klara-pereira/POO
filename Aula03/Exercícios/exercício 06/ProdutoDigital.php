<?php

require_once 'Produto.php';

class ProdutoDigital extends Produto{
    private string $tamanhoArquivo;

    public function __construct($nome, $preco, $tamanhoArquivo){
        parent::__construct($nome, $preco);
        $this->tamanhoArquivo = $tamanhoArquivo;
    }

    public function mostrarTamanho(){
        $this->mostrarProduto();
        echo "Tamanho do arquivo: " . $this->tamanhoArquivo . "<br>";
    }
}

?>