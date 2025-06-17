 <?php
// $alunos = [
//     "aluno1" => 10,
//     "aluno2" => 10,
//     "aluno3" => 10,
// ];

// foreach( $alunos as $key => $value){
//     echo $key . ": ". $value. "<br>";
//     $media = ($value + $value + $value)/3;
// };

//    echo $media;

$alunos = [
    "helber" => [
        "nota" => 10
    ],
    "pedro" => [
        "nota" => 10
    ],
    "ivy" => [
        "nota"=> 10
    ],
];
$media= 0;
echo "<hr>";

foreach($alunos as $alunoNome /*key*/ => $alunoNota /*value*/ ){
    echo"Nome: ".$alunoNome."<br>";
    echo"Nota: ".$alunoNota['nota']."<br>";

    $media += $alunoNota['nota']/3;

};

echo"A média das notas da turma é: ".number_format( $media,2)."<br>";
?>  
