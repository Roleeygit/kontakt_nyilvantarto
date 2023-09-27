<?php

$serverName = "localhost";
$userName = "root";
$password = ""; 	
$dbName = "nyilvantarto";

$con = mysqli_connect($serverName, $userName, $password, $dbName);

if(mysqli_connect_errno()) 
{
    echo "Csatlakozás sikertelen! Próbálkozz újra.";
    exit();
}
echo "Sikeres csatlakozás!"

?>

-- localhoston tesztelve, a connection működik.