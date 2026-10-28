<?php

class Notificacao{
    public function notificacaoEmail(){
        echo "Recendo notificação no email!";
    }
}

class notificacaoSMS extends Notificacao{
    public function notificacaoEmail(){
        echo "Recebendo notificação via SMS!";
    }
}

class notificacaoPush extends Notificacao{
    public function notificacaoEmail(){
        echo "Recenbendo notificação Push!";
    }
}

echo "Sua inscrição foi realizada com sucesso! <br><br>";

$notificacao = new Notificacao();
$notificacao-> notificacaoEmail();
echo "<br>";
$notificacao = new notificacaoSMS();
$notificacao-> notificacaoEmail();
echo "<br>";
$notificacao = new notificacaoPush();
$notificacao-> notificacaoEmail();
?>