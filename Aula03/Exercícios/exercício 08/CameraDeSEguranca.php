
<?php

require_once 'Dispositivo.php';

class CameraSeguranca extends Dispositivo{
    private string $resolucao;

    public function __construct($nome, $fabricante, $numeroSerie, $resolucao){
        parent::__construct($nome, $fabricante, $numeroSerie);
        $this->resolucao = $resolucao;
    }

    public function mostrarResolucao(){
        echo "Dispositivo: " . $this->nome . "<br>";
        echo "Resolução: " . $this->resolucao . "<br>";
    }
}

?>
