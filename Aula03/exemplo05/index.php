<?php

require_once 'Aluno.php';
require_once 'Professor.php';

$aluno = new Aluno('Klara ', 16 , 'DS');
$aluno->exibirInformacoes();
$aluno->exibirCurso();

echo '<br>';

$professor = new Professor('Luiz', 39 , 'Back-End');
$professor->informacoesProfessor();
$professor->exibirCurso();

?>