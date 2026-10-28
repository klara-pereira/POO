<?php

require_once 'Carro.php';
require_once 'Moto.php';

$carro = new Carro("Toyota", 2022, 4);
$moto = new Moto("Honda", 2024, 160);

echo "Carro";
$carro->mostrarCarro();

echo "<hr>";

echo "Moto";
$moto->mostrarMoto();

?>