<?php
$valor = [10, 20, 30, 40, 50];
$soma = 0;

echo "Valores:<br>";
foreach($valor as $number){
    echo $number.'<br>';
    $soma = $soma + $number;
}
echo"<br>";
echo "Total da compra = ". $soma;
?>