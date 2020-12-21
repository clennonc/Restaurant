<?php

//Development Connection
//$servername = "localhost";
//$dBUsername = "root";
//$dBPassword = "";
//$dBName = "restaurant";

//Remote Database Connection
 $host = 'remotemysql.com';
 $db = 'kKlKXgGoNl';
 $user = 'kKlKXgGoNl';
 $pass = 'ElhUU5dmnu';
 $charset = 'utf8mb4';
$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn){
    die("Connection failed:" .mysqli_connect_error());
}
?>

