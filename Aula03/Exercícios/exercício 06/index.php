<?php

require_once 'ProdutoFisico.php';
require_once 'ProdutoDigital.php';

$notebook = new ProdutoFisico("Notebook", 3500, 2.5);
$software = new ProdutoDigital("Software", 199.90, "500 MB");

echo "Produto Físico";
$notebook->mostrarPeso();

echo "<hr>";

echo "Produto Digital";
$software->mostrarTamanho();

?>