<?php

//Development Connection
//$servername = "localhost";
//$dBUsername = "root";
//$dBPassword = "";
//$dBName = "restaurant";

$servername = "remotemysql.com";
$dBUsername = "kKlKXgGoNl";
$dBPassword = "ElhUU5dmnu";
$dBName = "kKlKXgGoNl";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn){
    die("Connection failed:" .mysqli_connect_error());
}
?>

