<?php

$serverName = "localhost";
$userName = "root";
$password = ""; 	
$dbName = "nyilvantarto";

$conn =new mysqli($serverName, $userName, $password, $dbName);

if(!$conn)
{
    die(mysqli_error($conn));
}

// localhoston tesztelve, a connection működik.
?>