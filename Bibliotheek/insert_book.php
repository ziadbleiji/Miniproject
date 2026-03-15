<?php

include "config.php";

$titel = $_POST['titel'];
$auteur = $_POST['auteur'];
$genre = $_POST['genre'];
$jaar = $_POST['jaar'];

if(empty($titel) || empty($auteur) || empty($genre) || empty($jaar)){
echo "Alle velden moeten ingevuld worden";
exit;
}

$sql = "INSERT INTO boeken (titel,auteur,genre,publicatiejaar)
VALUES ('$titel','$auteur','$genre','$jaar')";

mysqli_query($conn,$sql);

header("Location: index.php");

?>

