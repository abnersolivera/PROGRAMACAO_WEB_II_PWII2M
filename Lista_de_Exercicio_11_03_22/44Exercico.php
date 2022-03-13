<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 44</title>
</head>
<body>
    <?php
        echo"<b>44)</b>Escreva um algoritmo para ler 2 valores e se o segundo valor informado for ZERO, deve ser lido um novo valor, ou seja, para o segundo valor não pode ser aceito o valor zero e imprimir o resultado da divisão do primeiro valor lido pelo segundo valor lido.</br>";        
        
        $numero1 = 6;
        $numero2 = 0;
        if($numero2 == 0){
            do{
                echo "<script>alert('A divisão não pode ser divisivel por zero informar um novo valor.')</script>";
                $numero2 = 2;                
                if($numero2 > 0){
                    $divisao = $numero1 / $numero2;
                    echo "O calculo da divisão de ".$numero1." / ".$numero2." = ".$divisao ;
                }
            }while($numero2 == 0);
        }
    ?>
</body>
</html>