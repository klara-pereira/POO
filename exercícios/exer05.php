<?php

// Criação da classe Festa
class Festa{

    // Atributos da classe
    var $tipo;
    var $local;
    var $data;

    // Método que exibe os dados da festa
    function exibirDadosFesta(){
        echo "<p>A festa '{$this->tipo}' será realizada em {$this->local} na data {$this->data}.</p>";
    }

    // Método que informa que a festa começou
    function abrir(){
        echo "<p>A festa '{$this->tipo}' começou no local {$this->local}!</p>";
    }

    // Método que informa que a festa terminou
    function fechar(){
        echo "<p>A festa '{$this->tipo}' terminou no local {$this->local}.</p>";
    }
}


// Criando o primeiro objeto da classe Festa
$festa1 = new Festa();

// Atribuindo valores aos atributos do primeiro objeto
$festa1->tipo = "Aniversário";
$festa1->local = "Salão de Festas Central";
$festa1->data = "2025-11-01";


// Criando o segundo objeto da classe Festa
$festa2 = new Festa();

// Atribuindo valores aos atributos do segundo objeto
$festa2->tipo = "Casamento";
$festa2->local = "Chácara do Sol";
$festa2->data = "2025-12-15";


// Testando os métodos do primeiro objeto
$festa1->exibirDadosFesta();
$festa1->abrir();
$festa1->fechar();


// Testando os métodos do segundo objeto
$festa2->exibirDadosFesta();
$festa2->abrir();
$festa2->fechar();

?>