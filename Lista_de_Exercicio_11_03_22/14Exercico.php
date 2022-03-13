<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 14</title>
</head>
<body>
    <?php
        include __DIR__.'/styles.php';
        
        echo "<h1>Exercício 14</h1>";
        echo "<hr>"; 
        echo"<b>14)</b> Ler um valor e escrever a mensagem É MAIOR QUE 10! se o valor lido for maior que 10, caso
        contrário escrever NÃO É MAIOR QUE 10!</br>";

        $numero = 9;
        if($numero == 10){
            echo "<div class = resposta>";
            echo"<b>Resposta: </b><b>O VALOR INFORMADO É 10, DIGITAR NOVO VALOR PARA VERIFICAÇÃO</b>";
            echo "</div>";
            echo "<hr>"; 
        }
        elseif($numero > 10){
            echo "<div class = resposta>";
            echo"<b>Resposta: </b><b>É MAIOR QUE 10!</b>";
            echo "</div>";
            echo "<hr>"; 
        }
        else{
            echo "<div class = resposta>";
            echo"<b>Resposta: </b><b>NÃO É MAIOR QUE 10!</b>";
            echo "</div>";
            echo "<hr>"; 
        }
        
    ?>
</body>
</html>