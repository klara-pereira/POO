<?php

class Frete{
    public function calcularFrete(){
        $valor = 10 + 4;
        echo "O frete está sendo calculado ... ";
        echo "<br>Seu frete ficou em R$" . $valor + 2;
        echo "<br>";
    }
}

class FreteExpresso extends Frete{
    public function calcularFrete(){
        $valor = 20 + 10;
        echo "O frete expresso está sendo calculado ..."; 
        echo "<br>O frete expresso ficou em R$". $valor + 5;
        echo "<br>";
   }
}

class RetiradaLoja extends Frete{
    public function calcularFrete(){
        echo "Se retirar na loja não precisa pagar frete ";
        echo "<br>Não a frente se a mercadoria for retirada na loja!";
    }
}

$frete = new Frete();
$frete->calcularFrete();
echo "<br>";
$frete = new FreteExpresso();
$frete->calcularFrete();
echo "<br>";
$frete = new RetiradaLoja();
$frete->calcularFrete();

?>