<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio Aula 11/03/2022</title>
</head>
<body>

    <h1>Exercício Aula 11/03/2022</h1>

    <?php
        echo"<b>5)</b> Escreva um algoritmo para ler um valor (do teclado) e escrever (na tela) o seu antecessor.<br/>";

        $usuario = 5;
        $antecessor = $usuario - 1;

        echo"<b>Resposta:</b> O antecessor do número ".$usuario." é ".$antecessor.".</br></br>";

        echo"<b>6)</b> Escreva um algoritmo para ler as dimensões de um retângulo (base e altura), calcular e escrever a
        área do retângulo.<br/>";

        $base = 5;
        $altura = 9;
        $area = $base * $altura;

        echo"<b>Resposta:</b> área do retângulo é ".$area."</br></br>";

        echo"<b>9)</b> Escreva um algoritmo para ler o salário mensal atual de um funcionário e o percentual de reajuste.
        Calcular e escrever o valor do novo salário.</br>";

        $salario = 10000;
        $percentual = 10/100;

        $reajuste = $salario * $percentual + $salario;

        echo $reajuste."</br></br>";

        echo"<b>14)</b> Ler um valor e escrever a mensagem É MAIOR QUE 10! se o valor lido for maior que 10, caso
        contrário escrever NÃO É MAIOR QUE 10!</br>";

        $numero = 10;

        if($numero >= 10){
            echo"<b>É MAIOR QUE 10!</b></br></br>";
        }
        else{
            echo"<b>NÃO É MAIOR QUE 10!</b></br></br>";
        }

        echo"<b>15)</b> Ler um valor e escrever se é positivo ou negativo (considere o valor zero como positivo).</br>";
        $numeropositivoNegativo = 5;
        $positivoNegativo = $numeropositivoNegativo % 2;
        
        if($positivoNegativo == 0){
            echo"<b>positivo</b></br></br>";
        }
        else{
            echo"<b>negativo</b></br></br>";
        }
        
        echo"<b>16)</b> As maçãs custam R$ 1,30 cada se forem compradas menos de uma dúzia, e R$ 1,00 se forem
        compradas pelo menos 12. Escreva um programa que leia o número de maçãs compradas, calcule e
        escreva o custo total da compra.";

        $quantidadeMaca = 11;

        if($quantidadeMaca >= 12){
            $compra = $quantidadeMaca * 1.30;
            echo"<b></b></br></br>".$compra;
        }
        else{
            $compra = $quantidadeMaca * 1.00;
            echo"<b></b></br></br>".$compra;
        }



    ?>
    
</body>
</html>