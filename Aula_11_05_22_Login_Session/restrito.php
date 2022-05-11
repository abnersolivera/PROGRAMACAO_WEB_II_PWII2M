<?php
    session_start();
    if(isset($_SESSION['usuario']) != true){
        header("Location: login.html");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restrito</title>
</head>
<body>
    Seja, Bem vindo!
</body>
</html>