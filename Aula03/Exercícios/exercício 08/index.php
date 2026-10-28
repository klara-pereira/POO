
<?php

require_once 'SensorTemperatura.php';
require_once 'SensorUmidade.php';
require_once 'CameraDeSeguranca.php';

$temperatura = new SensorTemperatura("Sensor da Sala", "Intelbras", "ST001", 25.5);
$umidade = new SensorUmidade("Sensor do Quarto", "Xiaomi", "SU002", 60);
$camera = new CameraSeguranca("Câmera da Entrada", "Intelbras", "CS003", "Full HD");

echo "Sensor de Temperatura";
$temperatura->apresentarDispositivo();
$temperatura->mostrarTemperatura();
echo "Número de série: " . $temperatura->getNumeroSerie();

echo "<hr>";

echo "Sensor de Umidade";
$umidade->apresentarDispositivo();
$umidade->mostrarUmidade();
echo "Número de série: " . $umidade->getNumeroSerie();

echo "<hr>";

echo "Câmera de Segurança";
$camera->apresentarDispositivo();
$camera->mostrarResolucao();
echo "Número de série: " . $camera->getNumeroSerie();

?>
