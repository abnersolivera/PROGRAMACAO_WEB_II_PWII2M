<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 15</title>
</head>
<body>
    <?php
    
        echo"<b>15)</b> Ler um valor e escrever se é positivo ou negativo (considere o valor zero como positivo).</br>";
        $numeropositivoNegativo = 5;
        $positivoNegativo = $numeropositivoNegativo % 2;
        
        if($positivoNegativo == 0){
            echo"<b>positivo</b></br></br>";
        }
        else{
            echo"<b>negativo</b></br></br>";
        }
       
    ?>
</body>
</html>