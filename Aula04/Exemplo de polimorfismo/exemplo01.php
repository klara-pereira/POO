<?php

class Animal{
    public function emitirSom(){
        echo "Som desconhecido...🔊";
    }
}

class Gato extends Animal{
    public function emitirSom(){
        echo "Miauuuuuuuuu!😺";
    }

}

class Cachorro extends Animal{
    public function emitirSom(){
        echo "<br>Auauau!🐶";
    }
}

$gato = new Gato();
$gato->emitirSom();
$cachorro = new Cachorro();
$cachorro->emitirSom();

?>