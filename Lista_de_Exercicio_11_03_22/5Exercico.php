<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>
    <?php
        include __DIR__.'/styles.php';
        
        echo "<h1>Exercício 5</h1>";
        echo "<hr>"; 
        echo"<b>5)</b> Escreva um algoritmo para ler um valor (do teclado) e escrever (na tela) o seu antecessor.<br/>";

        $usuario = 5;
        $antecessor = $usuario - 1;
        
        echo "<div class = resposta>";
        echo"<b>Resposta:</b> O antecessor do número ".$usuario." é ".$antecessor;
        echo "</div>";
        echo "<hr>"; 
    ?>
</body>
</html>