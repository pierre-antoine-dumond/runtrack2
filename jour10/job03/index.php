<?php

$user='root';
$pass = 'root';
$db = 'jour09';
$db = new mysqli('localhost', $user, $pass, $db);
$sqlQuery = 'SELECT prenom, nom, naissance FROM étudiants WHERE sexe = "femme"';
$result = mysqli_query($db, $sqlQuery) or die ("Bad Query");
echo "<table border='1'>";
echo "<tr><td>prenom</td><td>nom</td><td>naissance</td></tr>\n";
while($row=mysqli_fetch_assoc($result)){
    echo "<tr><td>{$row['prenom']}</td><td>{$row['nom']}</td><td>{$row['naissance']}</td></tr>\n";
}
echo "</table>";
?>
