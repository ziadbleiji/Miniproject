<!DOCTYPE html>

<html>
<head>
<title>Boek toevoegen</title>
</head>
<body>

<h2>Voeg een boek toe</h2>

<form action="insert_book.php" method="POST">

Titel:<br> <input type="text" name="titel" required><br><br>

Auteur:<br> <input type="text" name="auteur" required><br><br>

Genre:<br> <input type="text" name="genre" required><br><br>

Publicatiejaar:<br> <input type="number" name="jaar" required><br><br>

<input type="submit" value="Opslaan">

</form>

<br>
<a href="index.php">Terug naar overzicht</a>

</body>
</html>
