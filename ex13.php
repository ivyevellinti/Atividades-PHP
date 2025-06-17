<?php
$produtos = [
    "produto1" => 10,
    "produto2" => 20,
    "produto3"=> 30,
];

foreach( $produtos as $key => $value){
    echo $key . ": ". $value. "<br>";
}
;
?>