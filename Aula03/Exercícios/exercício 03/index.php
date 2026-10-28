<?php

require_once 'Gerente.php';
require_once 'Desenvolvedor.php';

$gerente = new Gerente("Roberto", 5000, "TI");
$desenvolvedor = new Desenvolvedor("Ana", 3500, "PHP");

echo "Gerente<br>";
$gerente->gerenciarEquipe();

echo "<hr>";

echo "Desenvolvedor<br>";
$desenvolvedor->programar();

?>