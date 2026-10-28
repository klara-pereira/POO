<?php

require_once 'Livro.php';
require_once 'Revista.php';

$livro1 = new Livro("Dom Casmurro", 1899, "Machado de Assis <br>");
$livro2 = new Livro("O Pequeno Príncipe", 1943, "Antoine de Saint-Exupéry <br>");
$revista = new Revista("National Geographic", 2025, 10);

echo "Livro 1";
$livro1-> mostrarLivro();

echo "Livro 2";
$livro2->mostrarLivro();

echo "Revista";
$revista->mostrarRevista();

?>