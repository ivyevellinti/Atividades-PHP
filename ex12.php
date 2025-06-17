<?php
$usuario = [
    "nome" => "Ivy",
    "idade" => 17,
    "email" => "ivy@example.com"
];

foreach( $usuario as $key => $value){
    echo $key . ": ". $value. "<br>";
}
?>