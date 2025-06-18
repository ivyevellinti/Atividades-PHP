<?php
if($_SERVER["REQUEST_METHOD"]=== "POST"){
    if(isset($_POST["nomeCliente"]) && ($_POST["produto"]) && ($_POST["estrela"]) && ($_POST["comentario"]) ){
        $nome = $_POST["nomeCliente"];
        $produto = $_POST["produto"];
        $estrela = $_POST["estrela"];
        $comentario = $_POST["comentario"];
        echo"Nome do Cliente: ".$nome."<br>"."Produto: ".$produto."<br>"."Avaliação: ".$estrela."<br>"."Comentário: ".$comentario;
}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
</head>
<body>
    <form method="POST">
        <label for="">
            <p>Coloque aqui as informações do produto -></p>
        </label>
            <input type="text" id="nomeCliente" name="nomeCliente" placeholder="Digite seu Nome"><br>


            <select name="produto" id="produto">
                <option value="manga">Manga</option>
                <option value="urubu">Urubu</option>
                <option value="computador">Computador</option>
                <option value="papel_higi">Papel Higiênico</option>
            </select>

            <p>Avalie o Produto!</p>
            <input type="radio" id="estrela1" name="estrela" value="1 estrela">
            <label for="estrela1">1 estrela</label><br>
            <input type="radio" id="estrela2" name="estrela" value="2 estrelas">
            <label for="estrela2">2 estrelas</label><br>
            <input type="radio" id="estrela3" name="estrela" value="3 estrelas">
            <label for="estrela3">3 estrelas</label><br>
            <input type="radio" id="estrela4" name="estrela" value="4 estrelas">
            <label for="estrela4">4 estrelas</label><br>
            <input type="radio" id="estrela5" name="estrela" value="5 estrelas">
            <label for="estrela5">5 estrelas</label><br>
            
            <textarea name="comentario" id="comentario">Escreva um comentário!</textarea><br>
            <button type="submit">Enviar</button>

    </form>
    
</body>
</html>