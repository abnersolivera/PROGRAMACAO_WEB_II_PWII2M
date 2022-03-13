<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 15</title>
</head>
<body>
    <?php
        include __DIR__.'/styles.php';
        
        echo "<h1>Exercício 15</h1>";
        echo "<hr>";     
        echo"<b>15)</b> Ler um valor e escrever se é positivo ou negativo (considere o valor zero como positivo).</br>";
        $numeropositivoNegativo = 0;
        $positivoNegativo = $numeropositivoNegativo % 2;
        
        if($positivoNegativo == 0){
            echo "<div class = resposta>";
            echo"<b>Resposta: </b>O valor informado ".$numeropositivoNegativo." <b>positivo</b></br></br>";
            echo "</div>";
            echo "<hr>"; 
        }
        else{
            echo "<div class = resposta>";
            echo"<b>Resposta: </b>O valor informado ".$numeropositivoNegativo." <b>negativo</b></br></br>";
            echo "</div>";
            echo "<hr>"; 
        }
       
    ?>
</body>
</html>