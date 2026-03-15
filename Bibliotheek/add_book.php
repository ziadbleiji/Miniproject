<!DOCTYPE html>

<html>
<head>

<title>Boek toevoegen</title>

<script>

function checkForm(){

let titel = document.forms["boekForm"]["titel"].value;
let auteur = document.forms["boekForm"]["auteur"].value;

if(titel == "" || auteur == ""){
alert("Titel en auteur moeten ingevuld worden");
return false;
}

}

</script>

</head>

<body>

<header>
<h1>Boek toevoegen</h1>
<hr>
</header>

<form name="boekForm" action="insert_book.php" method="POST" onsubmit="return checkForm()">

Titel:<br> <input type="text" name="titel" required><br><br>

Auteur:<br> <input type="text" name="auteur" required><br><br>

Genre:<br> <input type="text" name="genre" required><br><br>

Publicatiejaar:<br> <input type="number" name="jaar" required><br><br>

<input type="submit" value="Boek opslaan">

</form>

<br>

<a href="index.php">Terug naar overzicht</a>

<footer>
<hr>
<p>Bibliotheek applicatie</p>
</footer>

</body>
</html>

