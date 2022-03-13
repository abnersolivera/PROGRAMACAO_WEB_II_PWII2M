<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
</head>
<body>
    <?php
        include __DIR__.'/styles.php';
        
        echo "<h1>Exercício 6</h1>";
        echo "<hr>"; 
         echo"<b>6)</b> Escreva um algoritmo para ler as dimensões de um retângulo (base e altura), calcular e escrever a área do retângulo.<br/>";
 
         $base = 5;
         $altura = 9;
         $area = $base * $altura;

         echo "<div class = resposta>";
         echo"<b>Resposta:</b> área do retângulo é ".$area;
         echo "</div>";
         echo "<hr>"; 
        
    ?>
</body>
</html>