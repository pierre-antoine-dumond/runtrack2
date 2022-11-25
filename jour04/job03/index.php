<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    $_POST['Prenom']['Nom'];
    if(isset($_POST['Prenom']) || isset($_POST['Nom'])) {
        echo 'Le nombre d’argument POST envoyé est : ' . $_POST['Prenom'] . ' ' . $_POST['Nom'];
    }
?>
<body>
    <form action="index.php" method="post" name="index">
        Nom :<input type="text" name="Nom">
        </br>
        Prénom :<input type="text" name="Prenom">
        <br>
        <input type="submit" value="Confirmer">
    </form>
</body>
</html>
