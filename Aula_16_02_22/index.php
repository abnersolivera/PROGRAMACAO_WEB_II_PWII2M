<?php

            //Comentarios 

        // linha

        # Linha

        /*
            Bloco
            entrada de dados
            saidade de dados
        */

    /*
        maior que > , maior que e igual >=
        menor que > , menor que e igual >=
        diferente !=
        igual ==
        booleano true , false

    */


    $nome = "Abner";
    $idade = 25;
    $ativo = true;
    $salario = 1200.05;
    $diaSemana = [ //array
        "Domingo",
        "segunda-feira",
        "terça-feira",
        "quarta-feira",
        "quinta-feira",
        "sexta-feira",
        "sabado"
    ];

    echo "<br>".$nome;
    print "<br>".$ativo;
    printf("<br>Idade %d" , $idade);
    print_r($diaSemana);
    var_dump("<br>".$salario);


    if($idade >= 18){
        echo "<br>a idade é maior que ou igual a 18";
    }

    if($idade != 18){
        echo "<br>a idade é maior que ou igual a 18";
    }

    $bool = 10 != 30;

    echo "<br>Resultado é".$bool;

    /*
        Operador Lógicos

        E - &&, and
        ou - ||, or
        negação - !(true); // false

        operador aritmeticos
        +
        -
        *
        /
        % = mod
        
    */

    if(!(100 == 1) && (100 != 1 || !(1 == 10))){
        echo "<br>São todos 100-e";
    }
    else{
        echo "<br>são diferentes";
    }

    if(100 == 1 || 100 != 1){
        echo "<br>São todos 100-ou";
    }
    else{
        echo "<br>são diferentes";
    }

    $resultado = "1001" + 100 ;
    echo "<br>".$resultado;


    //saber o tipo de valor declarado va variavel

    echo gettype($idade);


   
?>