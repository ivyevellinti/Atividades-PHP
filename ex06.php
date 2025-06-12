<?php
$nota1 = 7;
$nota2 = 7;
$nota3 = 7;
$media = ($nota1+$nota2+$nota3)/3;

echo"Sua média é ".$media. "<br>";

if($media >= 7){
    echo"Você foi aprovado!";
}
else{
    echo("Você foi reprovado...");
}
?>