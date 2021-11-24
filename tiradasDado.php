<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>tirar Dados</title>
    </head>
    <body>
        <?php
        
        include 'Dado.php';
        
        for ($i=1;$i<=12;$i++) {
            $num = rand (0,12);
            echo $i."  -->  ".$num."<br>";
        }

        ?>
    </body>
</html>