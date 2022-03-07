<?php

/**
 * Realizado em aula usado:
 * if
 * elseif
 * else
 */
    $t = date("H");
	$favcolor = "red";

    echo "<h1>Exemplo 1 if elseif else</h1>";

    if($t < "10"){
        echo"Have a good morning!</br>";
    }elseif ($t <"20") {
        echo"Have a good day!</br>";
    }else{
        echo"Have a good night!</br>";
    }
	/**
     * Realizado em aula usando Switch
    */

    echo "<hr>";
    echo "<h1>Exemplo 2 Switch</h1>";
		
	    switch ($favcolor) {
            case "red":
                echo"Your favorite color is red!</br>";
                break;
            
                case "blue":
                echo"Your favorite color is blue!</br>";
                break;
            
                case "green":
                echo"Your favorite color is green!</br>";
                break;
            
            default:
                echo"Your favorite color is neither red, blue, nor green!</br>";
                break;
    }

    echo "<hr>";
    echo "<h1>Exercício 1 Switch</h1>";

    /**
     * exercicio deixado pelo professor 
     * usuario os exemplo acima e inverter o que foi passado em aula
     */

     switch($t){

            case "1":
                echo"Have a good morning!</br>";
                break;

            case "2":
                echo"Have a good morning!</br>";
                break;

            case "3":
                echo"Have a good morning!</br>";
                break;

            case "4":
                echo"Have a good morning!</br>";
                break;

            case "5":
                echo"Have a good morning!</br>";
                break;

            case "6":
                echo"Have a good morning!</br>";
                break;
            
            case "7":
                echo"Have a good morning!</br>";
                break;
            
            case "8":
                echo"Have a good morning!</br>";
                break;
            
            case "9":
                echo"Have a good morning!</br>";
                break;
            
            case "10":
                echo"Have a good morning!</br>";
                break;

            case "11":
                echo"Have a good day!</br";
                break;
    
            case "12":
                echo"Have a good day!</br";
                break;
    
            case "13":
                echo"Have a good day!</br";
                break;
    
            case "14":
                echo"Have a good day!</br";
                break;
    
            case "15":
                echo"Have a good day!</br";
                break;
    
            case "16":
                echo"Have a good day!</br";
                break;
            
            case "17":
                echo"Have a good day!</br";
                break;
            
            case "18":
                echo"Have a good day!</br";
                break;
            
            case "19":
                echo"Have a good day!</br";
                break;
            
            case "20":
                echo"Have a good day!</br";
                break;

            default:
            echo"Have a good night!</br>";
            break;
     }

     echo "<hr>";
     echo "<h1>Exercício if elseif else</h1>";

     if($favcolor == "red")
     {
        echo"Your favorite color is red!</br>";
     }
     elseif($favcolor == "blue")
     {
        echo"Your favorite color is blue!</br>";
     }

     elseif($favcolor == "green"){
        echo"Your favorite color is green!</br>";
     }
     else{
        echo"Your favorite color is neither red, blue, nor green!</br>";
     }

     echo "<hr>";



?>