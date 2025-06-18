<?php
if ($_SERVER["REQUEST_METHOD"] === "POST"){
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
            <p>Endereçoi de e-amil</p>
            <input type="email" id="userEmail" name="userEmail" placeholder="email@email.com">
            <button type="submit">Entrar</button>
        </label>
    </form>

</body>
</html>