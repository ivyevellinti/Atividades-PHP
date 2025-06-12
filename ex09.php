<?php
$i;
$soma = 0;

for($i=1; $i<=10; $i++){
    if($i%2== 0){
        $soma = $soma + $i;
}
}

echo"Soma = ".$soma;
?>