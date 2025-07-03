<?php
require "Carros.php";
require "Animais.php";

//OBJETO (instância de uma classe)
$carro = new Carro();
$carro2 = new Carro();
$carroEletrico = new CarroEletrico();

//POLIMORFISMO
$gato = new Gato();
emitirSom($gato);
echo"<hr>";

$carroEletrico->cor= "Branco";
$carroEletrico->marca= "BYD";
$carroEletrico->modelo="Seal";
$carroEletrico->autonomia="372km";

//ATRIBUTOS ESPECÍFICOS DE CADA OBJETO
$carro->cor = "Preto";
$carro->marca = "Fiat";
$carro->modelo = "Uno velho";

//ATRIBUTOS ESPECÍFICOS PARA UM NOVO OBJETO
$carro2->cor = "Roxo";
$carro2->marca = "BMW";
$carro2->modelo = "320I 2.0";

echo "Cor: ". $carro->cor . "<br>" . "Marca" . $carro->marca . "<br>" ."Modelo: " . $carro->modelo;
echo "<hr>";
echo "<br> Cor: ". $carro2->cor . "<br>" . "Marca: " . $carro2->marca . "<br>" ."Modelo: " . $carro2->modelo;
echo "<hr>";
echo "<br> Cor: ". $carroEletrico->cor . "<br>" . "Marca: " . $carroEletrico->marca . "<br>" ."Modelo: " . $carroEletrico->modelo. "<br>" ."Autonomia: " . $carroEletrico->autonomia;
?>