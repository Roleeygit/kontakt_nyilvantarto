<?php
include 'db.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];

    $sql="insert into `customers` (name,phone,address) 
    values('$name', '$phone', '$address')";

    $result=mysqli_query($conn,$sql);

    if($result){
        // echo "Sikeres felvétel!";
        header('location:kontakt_listazasa.php');
    }else{
        echo "Hiba a felvétel során: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Új kontakt felvétele</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
    <form method="post">

  <div class="mb-3">
    <label for="name" class="form-label">Név</label>
    <input type="name" name="name" class="form-control" id="name" aria-describedby="name" placeholder="Írd ide a felvenni kívánt nevet">
  </div>

  <div class="mb-3">
    <label for="phone" class="form-label">Telefonszám</label>
    <input type="phone" name="phone" class="form-control" id="phone" placeholder="Írd ide a felvenni kívánt telefonszámot">
  </div>

  <div class="mb-3">
    <label for="address" class="form-label">Cím</label>
    <input type="address" name="address" class="form-control" id="address" placeholder="Írd ide a felvenni kívánt lakcímet">
  </div>

  <button type="submit" class="btn btn-outline-primary" name="submit">Felvétel</button>
  <button type="submit" class="btn btn-outline-success" name="list"><a href="kontakt_listazasa.php" style="text-decoration:none;" class="text-black">Kontaktok</a></button>

</form>
    </div>
</body>

</html>