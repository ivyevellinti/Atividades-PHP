<?php
require "Aluno.php";

$aluno1 = new Aluno();
$aluno2 = new Aluno();

$aluno1->nome = "Ivy";
$aluno1->idade = 17;
$aluno1->matricula = 123456;
$aluno1->nota1 = 10;
$aluno1->nota2 = 10;
$aluno1->peso1 = 2;
$aluno1->peso2 = 2;

$aluno2->nome = "Cordeiro";
$aluno2->idade = 18;
$aluno2->matricula = 654321;
$aluno2->nota1 = 9;
$aluno2->nota2 = 9;
$aluno2->peso1 = 2;
$aluno2->peso2 = 2;

echo $aluno1->calcularMedia($aluno1->nota1, $aluno1->nota2, $aluno1->peso1, $aluno1->peso2 );
echo $aluno1->exibirDados($aluno1->nome, $aluno1->idade, $aluno1->matricula);
?>