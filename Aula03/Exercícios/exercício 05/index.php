<?php

require_once 'Cachorro.php';
require_once 'Gato.php';

$cachorro = new Cachorro("Rex", 3, "Labrador");
$gato = new Gato("Mimi", 2, "Branco");

echo "Cachorro";
$cachorro->latir();

echo "<hr>";

echo "Gato";
$gato->miar();

?>