<?php
if($_SERVER["REQUEST_METHOD"]=== "POST"){
    if(isset($_POST["nomeProduto"]) && ($_POST["categoriaProduto"]) && ($_POST["precoProduto"]) && ($_POST["quantideProduto"]) ){
        $nome = $_POST["nomeProduto"];
        $categoria = $_POST["categoriaProduto"];
        $preco = $_POST["precoProduto"];
        $quantidade = $_POST["quantideProduto"];
        echo"Nome: ".$nome."<br>"."Categoria: ".$categoria."<br>"."Preço: ".$preco."<br>"."Quantidade em estoque: ".$quantidade;
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <form method="POST">
        <label for="">
            <p>Coloque aqui as informações do produto -></p>
        </label>
            <input type="text" id="nomeProduto" name="nomeProduto" placeholder="Nome do Produto">
            <input type="text" id="categoriaProduto" name="categoriaProduto" placeholder="Categoria">
            <input type="number" id="precoProduto" name="precoProduto" placeholder="Preço do Produto">
            <input type="number" id="quantidadeProduto" name="quantideProduto" placeholder="Quantidade em Estoque">
            <button type="submit">Enviar</button>

    </form>
    
</body>
</html>