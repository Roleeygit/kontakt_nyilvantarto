<?php
include 'db.php';

$successMessage = "";
$updateSuccessful = false;

$id=$_GET['updateid'];
$sql="select * from `customers` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$phone=$row['phone'];
$address=$row['address'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];

    $sql="update `customers` set id=$id, name='$name', phone='$phone', address='$address' where id=$id"; 

    $result=mysqli_query($conn,$sql);

    if($result)
    {
        $updateSuccessful = true;
        $successMessage = "Sikeres módosítás.";
    }
    else
    {
        echo "Hiba a felvétel során: " . mysqli_error($conn);
        $updateSuccessful = false;
    }

    if ($updateSuccessful)
    {
        header('location: kontakt_listazasa.php?success=1');
    } else 
    {
        echo "A módosítás sikertelen.";
    }
}
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt módosítása</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
    <form method="post">

  <div class="mb-3">
    <label for="name" class="form-label">Név</label>
    <input  type="name" name="name" class="form-control" id="name" aria-describedby="name" value="<?php echo $name;?>">
  </div>

  <div class="mb-3">
    <label for="phone" class="form-label">Telefonszám</label>
    <input type="phone" name="phone" class="form-control" id="phone" value="<?php echo $phone;?>">
  </div>

  <div class="mb-3">
    <label for="address" class="form-label">Cím</label>
    <input type="address" name="address" class="form-control" id="address" value="<?php echo $address;?>">
  </div>

  <button type="submit" class="btn btn-outline-primary" name="submit">Módosít</button>
  <button type="submit" class="btn btn-outline-info" name="list"><a href="kontakt_listazasa.php" style="text-decoration:none;" class="text-black">Mégse</a></button>

</form>
    </div>
</body>

</html>