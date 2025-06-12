<?php

$nome = "Ivy";
function boas_vindas(string $nome): string{
    return 'Bem-vindo(a), '.$nome;
};

echo(boas_vindas($nome));

?>