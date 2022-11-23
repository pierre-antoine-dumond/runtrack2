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
    function occurrences($str, $char) {
        // $phrase = readline($str . "Entrez une phrase à comparer : \n");
        $chars = str_split($str);
        $nbchar = 0;
        foreach($chars as $value) {
            if($char === $value) {
                $nbchar = $nbchar + 1;
            }}
            echo "$nbchar <br>";
            // echo "$value <br>";
            // print_r($chars);
    }

    occurrences('Je suis developpeur fullstack, Yaya!', 'a');
    // var_dump($nbchar);
?>
