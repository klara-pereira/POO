<?php

// criação da classe Aula
class Aula{

    // atributos
    public string $disciplina;
    public string $professor;
    public float $duracao;
    public int $numeroSala;
    public string $bloco;

    // métodos
    public function exibirInformacoes(){
        echo "Disciplina: " . $this->disciplina . "<br>";
        echo "Professor: " . $this->professor . "<br>";
        echo "Duração: " . $this->duracao . " horas<br>";
        echo "Número da sala: " . $this->numeroSala . "<br>";
        echo "Bloco: " . $this->bloco . "<br>";
    }

    public function trocarProfessor($novoProfessor){
        $this->professor = $novoProfessor;
        echo "O professor foi alterado para: " . $this->professor . "<br>";
    }

    public function alterarLocal($n_sala, $bloco){
        $this->numeroSala = $n_sala;
        $this->bloco = $bloco;

        echo "O local da aula foi alterado.<br>";
        echo "Nova sala: " . $this->numeroSala . "<br>";
        echo "Novo bloco: " . $this->bloco . "<br>";
    }
}


// criação do objeto aula1
$aula1 = new Aula();

// colocando valores na aula1
$aula1->disciplina = "Linguagem de Marcação";
$aula1->professor = "Samuel";
$aula1->duracao = 2;
$aula1->numeroSala = 10;
$aula1->bloco = "A";


// criação do objeto aula2
$aula2 = new Aula();

// colocando valores na aula2
$aula2->disciplina = "Programação Back-End";
$aula2->professor = "Luiz";
$aula2->duracao = 3;
$aula2->numeroSala = 15;
$aula2->bloco = "B";


// exibindo informações da aula1
echo "<b><p>Aula 1</p></b>";

$aula1->exibirInformacoes();

echo "<br>";

$aula1->trocarProfessor("Gabriel");

echo "<br>";

$aula1->alterarLocal(20, "C");

echo "<hr>";


// exibindo informações da aula2
echo "<b><p>Aula 2</p></b>";

$aula2->exibirInformacoes();

echo "<br>";

$aula2->trocarProfessor("Leonardo");

echo "<br>";

$aula2->alterarLocal(25, "D");

?>