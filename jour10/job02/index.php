<?php

$user='root';
$pass = 'root';
$db = 'jour09';
$db = new mysqli('localhost', $user, $pass, $db);
$sqlQuery = 'SELECT * FROM salles';
$result = mysqli_query($db, $sqlQuery) or die ("Bad Query");
echo "<table border='1'>";
echo "<tr><td>nom</td><td>capacite</td></tr>\n";
while($row=mysqli_fetch_assoc($result)){
    echo "<tr><td>{$row['nom']}</td><td>{$row['capacite']}</td></tr>\n";
}
echo "</table>";
?>
