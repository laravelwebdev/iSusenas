<?php
date_default_timezone_set('Asia/Makassar');
$connect = mysqli_connect("localhost", "u770759286_susenas", "2=*YF=wd#Z", "u770759286_susenas");
$query = "select nks,pcl,pml, (p2c-p1c) as selisih, round(100*(p2c-p1c)/p1c,2) as persen from updating where statusc='sudah' order by nks ASC";
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
      <p>EVALUASI PENDATAAN</p>
    </div>

    <fieldset>
      <div class="success">
      <p>Pemutakhiran (Perubahan Jumlah KK)</p>
    </div>
    <table>
      <tr>
        <td><div class="success">
          <p>NKS</p>
        </div></td>
        <td colspan="2"><div class="success">
          <p>PCL</p>
        </div></td>
        <!--<td><div class="success">-->
        <!--  <p>Selisih</p>-->
        <!--</div></td>-->
        <td><div class="success">
          <p>Persen</p>
        </div></td>
      </tr>
      <?php
           while($row = mysqli_fetch_array($result))
     {
      echo '<tr>
        <td><label class="label-result">'.$row["nks"].'</label></td>
        <td colspan="2"><label class="label-result">'.$row["pcl"].'</label></td>
       
        <td class="right"><label class="label-result">'.$row["persen"].'</label></td>
       
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