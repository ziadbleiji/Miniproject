<?php
$conn = mysqli_connect("localhost","root","","rental");

if(!$conn){
    die("DB error");
}