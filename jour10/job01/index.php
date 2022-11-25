<?php

$user='root';
$pass = 'root';
$db = 'jour09';
$db = new mysqli('localhost', $user, $pass, $db);
$sqlQuery = 'SELECT * FROM étudiants';
$result = mysqli_query($db, $sqlQuery) or die ("Bad Query");
echo "<table border='1'>";
echo "<tr><td>id</td><td>nom</td><td>naissance</td><td>sexe</td><td>email</td></tr>\n";
while($row=mysqli_fetch_assoc($result)){
    echo "<tr><td>{$row['id']}</td><td>{$row['nom']}</td><td>{$row['naissance']}</td><td>{$row['sexe']}</td><td>{$row['email']}</td></tr>\n";
}
echo "</table>";
?>
