<?php

include "config.php";

$titel = $_POST['titel'];
$auteur = $_POST['auteur'];
$genre = $_POST['genre'];
$jaar = $_POST['jaar'];

$sql = "INSERT INTO boeken (titel,auteur,genre,publicatiejaar)
VALUES ('$titel','$auteur','$genre','$jaar')";

mysqli_query($conn,$sql);

header("Location: index.php");

?>
