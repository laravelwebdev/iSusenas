<?php
if (!isset($_GET['nama']) || !isset($_GET['nks'])) {
header("Location:index.php");
}
$connect = mysqli_connect("localhost", "u770759286_susenas", "2=*YF=wd#Z", "u770759286_susenas");
$query = "SELECT nks,nus, nus0324,krt, krt0324, statusc FROM cacah where nks='".$_GET['nks']."' and pcl='".$_GET['nama']."' ORDER BY nks ASC,nus + 0 ASC";
$result = mysqli_query($connect, $query);

?>

<!DOCTYPE html>
<html lang='en' class=''>

<head>
  <meta charset='UTF-8'>
  <title>Konversi Susenas</title>
  <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
  <meta content="utf-8" http-equiv="encoding">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">  
</head>

<body>
  <div id="app">
  <form class="vue-form" @submit.prevent="submit">
    <div class="blue-message">
      <p>PROGRESS PENDATAAN</p>
    </div>

    <fieldset>
      <div class="success">
      <p>Pencacahan</p>
    </div>
    <table>
      <tr>
        <td><div class="success">
          <p>NKS/NUS</p>
        </div></td>
        <td><div class="success">
          <p>KRT</p>
        </div></td>
        <td><div class="success">
          <p>Status</p>
        </div></td>
        <td><div class="success">
          <p>Update</p>
        </div></td>
      </tr>
      <?php
           while($row = mysqli_fetch_array($result))
     {
      $nus = '';
      $krt = $row["krt"];
      if ($row["nus0324"] != '') $nus =$row["nus0324"];
      if ($row["krt0324"] != '') $krt =$row["krt0324"];
      echo '<tr>
        <td><label class="label-result">'.$row["nks"].' ['.$nus.']'.'</label></td>
        <td><label class="label-result">'.$krt.'</label></td>
        <td><label class="label-result">'.$row["statusc"].'</label></td>
        <td><div class="blue">
          <p><a href="cacah.php?nks='.$row["nks"].'&krt='.$row["krt"].'&nus='.$row["nus"].'&nama='.$_GET['nama'].'">Update</a></p>
        </div></td>
      </tr>
      ';
     }
     ?>

     
      </table>

    </fieldset>
  </form>

</div>

</body>

</html>