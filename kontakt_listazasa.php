<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontaktok Listázása</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>

    <div class="container">

    <button class="btn btn-primary my-5"><a href="felvesz.php" class="text-light" style="text-decoration:none;">Hozzáadás</a></button>

    <table class="table">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Név</th>
      <th scope="col">Telefonszám</th>
      <th scope="col">Lakcím</th>
      <th scope="col">Módosítás</th>
      <th scope="col">Törlés</th>
    </tr>
  </thead>

  <tbody>

<?php
$sql="select * from `customers`";
$result=mysqli_query($conn,$sql);
if($result)
{
    while($row=mysqli_fetch_assoc($result))
    {
        $id=$row['id'];
        $name=$row['name'];
        $phone=$row['phone'];
        $address=$row['address'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$phone.'</td>
        <td>'.$address.'</td>
      </tr>';
    }
}
?>
<!-- 
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>

    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>

    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr> -->

  </tbody>

</table>

    </div>
</body>

</html>