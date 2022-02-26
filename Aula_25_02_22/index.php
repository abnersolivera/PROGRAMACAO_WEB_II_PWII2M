<?php
    $t = date("H");
	$favcolor = "red";

    if($t < "10"){
        echo"Have a good morning!</br>";
    }elseif ($t <"20") {
        echo"Have a good day!</br>";
    }else{
        echo"Have a good night!</br>";
    }
	/**/
		
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

?>