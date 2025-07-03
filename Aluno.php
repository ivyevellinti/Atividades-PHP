<?php

class Aluno
{
    public $nome;
    public $idade;
    public $matricula;
    public $nota1;
    public $nota2;
    public $peso1;
    public $peso2;

    //MÉTODOS
    public function calcularMedia($nota1, $nota2, $peso1, $peso2)
    {
        $media = ($nota1 * $peso1 + $nota2 * $peso2) / ($peso1 + $peso2);

        return "Sua média é: ".$media."<br>";
    }

    public function exibirDados($nome, $idade, $matricula)
    {
        echo "Nome: " . $nome . "<br>" . "Idade: " . $idade . "<br>" . "N° Matrícula: " . $matricula;
    }

    public function verificarAprovacao($media)
    {
        if ($media >= 7) {
            echo "Você foi aprovado!";
        } else {
            echo "Você foi reprovado...";
        }

    }
}
?>