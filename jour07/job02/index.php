<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label>Nom :</label>
        <input type="text" name="Nom">
        <!-- <input type="text" name="Prénom"> -->
        <input type="submit" value="Confirmer">
    </form>
</body>
</html>


<?php
    function bonjour($jour) {
        if($jour === true)
            echo "Bonjour\n";
        else
            echo "Bonsoir\n";
    }

    bonjour($jour = false)
?>
