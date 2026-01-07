<?php
/**
 * Monitoring updating index page
 */
require_once '../../config/database.php';

date_default_timezone_set('Asia/Makassar');

try {
    $conn = getDbConnection();
    
    $query = "SELECT kode_pcl, pcl, SUM(CASE WHEN statusc='sudah' THEN 1 ELSE 0 END) AS sudah, count(statusc) as total FROM updating GROUP BY pcl ORDER BY sudah DESC";
    $result = mysqli_query($conn, $query);
    
    $qtotal = "SELECT prov FROM updating WHERE statusc='sudah'";
    $rtotal = mysqli_query($conn, $qtotal);
    $total = mysqli_num_rows($rtotal);
} catch (Exception $e) {
    die('Database error: ' . $e->getMessage());
}

$qtotalp = "Select prov from updating where statusk='sudah'";
$rtotalp = mysqli_query($conn, $qtotalp);
$totalp=mysqli_num_rows($rtotalp);

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
      <p>Pemutakhiran</p>
    </div>
    <table>
      <tr>
        <td colspan="2"><div class="success">
          <p>Nama PCL</p>
        </div></td>
        <td><div class="success">
          <p>Cacah</p>
        </div></td>
        <td><div class="success">
          <p>Detail</p>
        </div></td>
      </tr>
      <?php
           while($row = mysqli_fetch_array($result))
     {
      echo '<tr>
        <td colspan="2"><label class="label-result">'.$row["pcl"].'</label></td>
        <td><div class="blue"><p>'.$row["sudah"].'</p></div></td>
        <td><div class="blue">
          <p><a href="dcacah.php?nama='.$row["kode_pcl"].'">Detail</a></p>
        </div></td>
      </tr>
      ';
     }
     ?>
      <tr>
        <td><label class="label-result">TOTAL</label></td>
        <td><div class="success">
          <p><?php echo $total; ?></p>
        </div></td>
        <td colspan="2"><div class="success">
          <p><?php echo round(100*$total/15,2).'%'; ?></p>
        </div></td>
      </tr>
     
      </table>

</body>

</html>