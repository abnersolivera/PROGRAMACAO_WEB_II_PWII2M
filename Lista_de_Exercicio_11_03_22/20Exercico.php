<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 20</title>
</head>
<body>
    <?php
        include __DIR__.'/styles.php';

        echo "<h1>Exercício 20</h1>";
        echo "<hr>";
        echo"<b>20)</b>Ler dois valores (considere que não serão lidos valores iguais) e escrevê-los em ordem crescente.</br>";

        $numero1 = 7;
        $numero2 = 2;

        if($numero1 > $numero2){
            echo "<div class = resposta>";
            echo "<b>Resposta: </b>Ordem crescente </br>".$numero2."</br>".$numero1;
            echo "</div>";
            echo "<hr>";
        }elseif($numero2 > $numero1){
            echo "<div class = resposta>";
            echo "<b>Resposta: </b>Ordem crescente </br>".$numero1."</br>".$numero2;
            echo "</div>";
            echo "<hr>";
        }else{
            echo "<div class = resposta>";
            echo "<b>Resposta: </b>Os numeros não podem ser iguais.";
            echo "</div>";
            echo "<hr>";
        }
    ?>
</body>
</html>