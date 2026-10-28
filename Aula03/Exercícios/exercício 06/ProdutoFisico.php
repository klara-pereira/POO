<?php

require_once 'Produto.php';

class ProdutoFisico extends Produto{
    private float $peso;

    public function __construct($nome, $preco, $peso){
        parent::__construct($nome, $preco);
        $this->peso = $peso;
    }

    public function mostrarPeso(){
        $this->mostrarProduto();
        echo "Peso: " . $this->peso . " kg<br>";
    }
}

?>