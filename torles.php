<?php
include 'db.php';

$successMessage = "";
$updateSuccessful = false;

if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];

    $sql="delete from `customers` where id=$id";
    $result=mysqli_query($conn, $sql);
    if($result)
    {
        $updateSuccessful = true;
        $successMessage = "Sikeres törlés.";
    } 
    else
    {
        $updateSuccessful = false;
        echo "Hiba a felvétel során.";
        die(mysqli_error($conn));
    }
    if ($updateSuccessful)
    {
        header('location: kontakt_listazasa.php?success=2');
    } else 
    {
        echo "A törlés sikertelen.";
    }
}
?>