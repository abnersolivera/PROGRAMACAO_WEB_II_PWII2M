<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 48</title>
</head>
<body>
    <?php
        include __DIR__.'/styles.php';
        
        echo "<h1>Exercício 48</h1>";
        echo "<hr>";
        echo"<b>48)</b>Escreva um algoritmo para ler as notas da 1a. e 2a. avaliações de um aluno, calcule e imprima a média (simples) desse aluno. Só devem ser aceitos valores válidos durante a leitura (0 a 10) para cada nota.</br>";

        
        $nota1 = 5;
        $nota2 = 11;
        if($nota1 >= 11 || $nota2 >= 11){
            do{
                echo "<div class = resposta>";
                echo "<script>alert('O valor informado dever ser de 0 a 10')</script>";
                $nota1 = 5;
                $nota2 = 10;
                $media = ($nota1 + $nota2) / 2;
                echo "<b>Resposta: </b>".$media;
                echo "</div>";
                echo "<hr>";                
            }while(!($nota1 <= 10 && $nota2 <= 10));
        }else{
            $media = ($nota1 + $nota2) / 2;
            echo "<div class = resposta>";
            echo "<b>Resposta: </b>".$media;
            echo "</div>";
            echo "<hr>"; 
        }
    ?>
</body>
</html>