<?php
    session_start();
    extract($_POST);
    if($usuario == "Administrador" && $senha == "123"){
        $_SESSION['usuario'] = [
            'nome' => $usuario,
            'senha' => $senha
        ];
        //header("Location: restrito.php");
        header("Content-type: application/json");
        echo('{"mensagem":"ok"}');
    }
    else{
        echo("Usuário e senha inválido!");
    }