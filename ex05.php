<?php
$derrota = 15;
$vitoria = 10;
$derrotaqtd = 2;
$vitoriaqtd = 5;

echo'Quantidade de vitórias = '.$vitoriaqtd."<br>";
echo'Quantidade de derrotas = '.$derrotaqtd."<br>";
echo'Pontuação inicial = '.$vitoria*$vitoriaqtd."<br>";
echo'Pontuação final = '.$vitoria*$vitoriaqtd-$derrota*$derrotaqtd."<br>";

?>