<!--  A LÓGICA VEM SEMPRE ANTES -->
<?php

//Server -> o servidor; request method -> vai requisitar algum método, mas qual? -> === post.
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    //O servidor não quer pegar nada vazio, então essa condicional serve para verificar se o método requisitado está vazio
    if (isset($_POST["userEmail"])){
        $email = $_POST["userEmail"];
        echo$email;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    
    <form method="POST">
        <label for="">
            <p>Endereço de e-mail</p>
            <input type="email" id="userEmail" name="userEmail" placeholder="email@email.com">
            <button type="submit">Entrar</button>
        </label>
    </form>

</body>
</html>