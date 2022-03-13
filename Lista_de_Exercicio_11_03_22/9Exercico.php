<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9</title>
</head>
<body>
    <?php
         echo"<b>9)</b> Escreva um algoritmo para ler o salário mensal atual de um funcionário e o percentual de reajuste.
         Calcular e escrever o valor do novo salário.</br>";
 
         $salario = 10000;
         $percentual = 10/100;
 
         $reajuste = $salario * $percentual + $salario;
 
         echo $reajuste;
        
    ?>
</body>
</html>