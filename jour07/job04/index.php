<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>


<?php
    function calcule($a, $operation, $b) {
        if($operation === '+') {
            $resultatOpe = $a + $b; 
        }if($operation === '-') {
            $resultatOpe = $a - $b; 
        }if($operation === '*') {
            $resultatOpe = $a * $b; 
        }if($operation === '/') {
            $resultatOpe = $a / $b; 
        }if($operation === '%') {
            $resultatOpe = $a % $b; 
        }
        echo $resultatOpe . "\n";
    }

    calcule(1,'%',3);
    // var_dump($resultat);
?>
