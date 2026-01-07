<?php
if (!isset($_GET['nama'])) {
header("Location:index.php");
}
$connect = mysqli_connect("localhost", "u770759286_susenas", "2=*YF=wd#Z", "u770759286_susenas");
$query = "SELECT DISTINCT nks FROM cacah where pcl='".$_GET['nama']."' ORDER BY nks ASC";
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
      <p>REKAPITULASI</p>
    </div>

    <fieldset>
    <table>
      <tr>
        <td><div class="success">
          <p>NKS</p>
        </div></td>
        <td><div class="success">
          <p>Rekap</p>
        </div></td>
      </tr>
      <?php
           while($row = mysqli_fetch_array($result))
     {
      
      echo '<tr>
        <td><label class="label-result">'.$row["nks"].'</label></td>
        <td><div class="blue">
          <p><a href="dcacah.php?nks='.$row["nks"].'&nama='.$_GET['nama'].'">Rekap</a></p>
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