<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>

    <h1>Aula 09/03/22 - Loop</h1>

    <?php
        /**
         * Loop
         * while
         * do
         * for
         * 
         * foreach usado com array
         */

        echo"<h2>Loop - for</h2>";
         for($i =0; $i < 10; $i++){
             if(($i % 2) == 0){
                echo "<div style=\"color:blue\"> valores pares ".$i."</div>";
             }else{
                echo "<div style=\"color:red\"> valores impares ".$i."</div>";
             }
            }
            
            
            echo"<h2>Loop - while</h2>";
            $a=0;
            while ($a < 10) {
                if(($a % 2) == 0){
                    echo "<div style=\"color:blue\"> valores pares ".$a."</div>";
                }else{
                    echo "<div style=\"color:red\"> valores impares ".$a."</div>";
                }
                $a++;
            }
            
            echo"<h2>Loop - do-while</h2>";
            $x=0;
            do {
                if(($x % 2) == 0){
                    echo "<div style=\"color:blue\"> valores pares ".$x."</div>";
                }else{
                    echo "<div style=\"color:red\"> valores impares ".$x."</div>";
                }
                $x++;
            } while ($x < 10);
            ?>
    
</body>
</html>