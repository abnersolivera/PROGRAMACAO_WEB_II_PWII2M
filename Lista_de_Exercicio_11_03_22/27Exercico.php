<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 27</title>
</head>
<body>
    <?php

        include __DIR__.'/styles.php';
        
        echo "<h1>Exercício 27</h1>";
        echo "<hr>";
        echo"<b>27)</b>Ler um valor e escrever se é positivo, negativo ou zero.</br>";

        $numero = 2;
        $positivoNegativo = $numero % 2;
        if($numero == 0){
            echo "<div class = resposta>";
            echo "<b>Resposta: </b>O valor informado ".$numero." é 0.";
            echo "</div>";
            echo "<hr>"; 
        }
        elseif($positivoNegativo == 0){
            echo "<div class = resposta>";
            echo "<b>Resposta: </b>O valor informado ".$numero." é positivo.";
            echo "</div>";
            echo "<hr>";  
        }else{
            echo "<div class = resposta>";
            echo "<b>Resposta: </b>O valor informado ".$numero." é negativo.";
            echo "</div>";
            echo "<hr>";  
        }
    
    ?>
</body>
</html>