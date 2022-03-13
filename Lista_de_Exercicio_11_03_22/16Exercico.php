<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 16</title>
</head>
<body>
    <?php
        include __DIR__.'/styles.php';
        
        echo "<h1>Exercício 16</h1>";
        echo "<hr>";         
         echo"<b>16)</b> As maçãs custam R$ 1,30 cada se forem compradas menos de uma dúzia, e R$ 1,00 se forem
         compradas pelo menos 12. Escreva um programa que leia o número de maçãs compradas, calcule e
         escreva o custo total da compra.</br>";
 
         $quantidadeMaca = 16;
 
         if($quantidadeMaca >= 12){
             $compra = $quantidadeMaca * 1.00;
             echo "<div class = resposta>";
             echo "<b>Resposta: </b>Maça quantidade ".$quantidadeMaca." valor unitário R$1,00 total da compra R$ ".$compra."</br></br>";
             echo "</div>";
             echo "<hr>"; 
         }
         else{
             $compra = $quantidadeMaca * 1.30;
             echo "<div class = resposta>";
             echo "<b>Resposta: </b>Maça quantidade ".$quantidadeMaca." valor unitário R$1,30 total da compra R$ ".$compra."</br></br>";
             echo "</div>";
             echo "<hr>"; 
         }
        
    ?>
</body>
</html>