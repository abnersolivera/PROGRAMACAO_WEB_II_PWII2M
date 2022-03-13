<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9</title>
</head>
<body>
    <?php
        include __DIR__.'/styles.php';
        
        echo "<h1>Exercício 9</h1>";
        echo "<hr>"; 
         echo"<b>9)</b> Escreva um algoritmo para ler o salário mensal atual de um funcionário e o percentual de reajuste.
         Calcular e escrever o valor do novo salário.</br>";
 
         $salario = 10000;
         $percentual = 10/100;
 
         $reajuste = $salario * $percentual + $salario;

         echo "<div class = resposta>";
         echo "<b>Resposta: </b>O seu salário de R$".$salario." foi reajustado em 10% agora você passará a receber R$ ".$reajuste;
         echo "</div>";
         echo "<hr>";
        
    ?>
</body>
</html>