<?php
include "config.php";
?>

<!DOCTYPE html>

<html>
<head>
<title>Bibliotheek</title>
</head>
<body>

<h1>Bibliotheek</h1>

<a href="add_book.php">Boek toevoegen</a>

<br><br>

<form action="search.php" method="GET">
Zoek boek:
<input type="text" name="zoek">
<input type="submit" value="Zoeken">
</form>

<br><br>

<table border="1">

<tr>
<th>Titel</th>
<th>Auteur</th>
<th>Genre</th>
<th>Publicatiejaar</th>
</tr>

<?php

$sql = "SELECT * FROM boeken";
$result = mysqli_query($conn,$sql);

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
