<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 20</title>
</head>
<body>
    <?php
        echo"<b>20)</b>Ler dois valores (considere que não serão lidos valores iguais) e escrevê-los em ordem crescente.</br>";

        $numero1 = 7;
        $numero2 = 2;

        if($numero1 > $numero2){
            echo $numero2."</br>".$numero1;
        }elseif($numero2 > $numero1){
            echo $numero1."</br>".$numero2;
        }else{
            echo "Os numeros não podem ser iguais.";
        }
    ?>
</body>
</html>