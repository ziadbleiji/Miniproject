<?php
include "config.php";

$zoek = $_GET['zoek'];

$sql = "SELECT * FROM boeken
WHERE titel LIKE '%$zoek%'
OR auteur LIKE '%$zoek%'";

$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>

<html>
<head>
<title>Zoekresultaten</title>
</head>
<body>

<h2>Zoekresultaten</h2>

<a href="index.php">Terug</a>

<br><br>

<table border="1">

<tr>
<th>Titel</th>
<th>Auteur</th>
<th>Genre</th>
<th>Jaar</th>
</tr>

<?php

while($row = mysqli_fetch_assoc($result)){

echo "<tr>";
echo "<td>".$row['titel']."</td>";
echo "<td>".$row['auteur']."</td>";
echo "<td>".$row['genre']."</td>";
echo "<td>".$row['publicatiejaar']."</td>";
echo "</tr>";

}

?>

</table>

</body>
</html>
