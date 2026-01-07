<?php
/**
 * Main index page for monitoring cacah
 */

require_once '../../config/database.php';

date_default_timezone_set('Asia/Makassar');

try {
    $conn = getDbConnection();
    
    $query = "SELECT pcl, SUM(CASE WHEN statusc='sudah' THEN 1 ELSE 0 END) AS sudah, count(statusc) as total from cacah GROUP BY pcl ORDER BY sudah DESC";
    $result = mysqli_query($conn, $query);
    
    $qtotal = "SELECT prov FROM cacah WHERE statusc='sudah'";
    $rtotal = mysqli_query($conn, $qtotal);
    $total = mysqli_num_rows($rtotal);
    
    $qtotalp = "SELECT prov FROM cacah WHERE statusk='sudah'";
    $rtotalp = mysqli_query($conn, $qtotalp);
    $totalp = mysqli_num_rows($rtotalp);
} catch (Exception $e) {
    die('Database error: ' . $e->getMessage());
}


$qpml = "SELECT pml, SUM(CASE WHEN statust='sudah' THEN 1 ELSE 0 END) AS sudah, count(statust) as total from cacah GROUP BY pml ORDER BY sudah DESC";
$rpml = mysqli_query($conn, $qpml);

$cacah = array(
16,
16,
16,
18,
20,
20,
20,
20,
20,
20,
20,
20,
20,
20,
20,
20,
20,
20,
1,
2,
3,
4,
6,
6,
6,
8,
10,
12,
14,
);
$kpml = array(
14,
14,
14,
16,
16,
20,
20,
20,
20,
20,
20,
20,
20,
20,
20,
20,
20,
20,
0,
1,
2,
2,
4,
4,
4,
6,
6,
10,
10,

);
    

    
$kumpul = array(
20,
20,
20,
32,
32,
32,
40,
40,
40,
40,
40,
40,
40,
40,
40,
40,
40,
40,
0,
0,
0,
0,
8,
8,
8,
8,
12,
20,
20,

);
    
    
    
    
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
          <p>Nama PCL</p>
        </div></td>
        <td class="td-small"><div class="success">
          <p>Cacah</p>
        </div></td>
        <td class="td-small"><div class="success">
          <p>Kumpul</p>
        </div></td>
        <td class="td-small"><div class="success">
          <p>Detail</p>
        </div></td>
      </tr>
      <?php
           while($row = mysqli_fetch_array($result))
     {
        $targetc=$cacah[idate('d')-1];
        $targetkpml=$kpml[idate('d')-1];
         
         if($targetc > $row["total"]) $targetc = $row["total"];
         if($targetkpml > $row["total"]) $targetkpml = $row["total"];
         $colorc = 'red';
      if ($row["sudah"]-$targetc>=0) $colorc='success';
      
      echo '<tr>
        <td><label class="label-result">'.$row["pcl"].'</label></td>
        <td><div class="'.$colorc.'"><p>'.$row["sudah"].'/'.$targetc.'</p></div></td>
        <td><div class="warning"><p>'.$kpml[idate('d')-1].'</p></div></td>
        <td><div class="blue">
          <p><a href="index2.php?nama='.$row["pcl"].'">Detail</a></p>
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
          <p><?php echo round(100*$total/660,2).'%'; ?></p>
        </div></td>
      </tr>
     
      </table>

      <div class="warning">
        <p>Pemasukan Dokumen</p>
      </div>

      <table>
        <tr>
          <td><div class="warning">
            <p>Nama PML</p>
          </div></td>
          <td><div class="warning">
            <p>Jumlah</p>
          </div></td>          
        </tr>
      <?php
           while($rowpml = mysqli_fetch_array($rpml))
     {
        $targetk=$kumpul[idate('d')-1];
         if($targetk > $rowpml["total"]) $targetk = $rowpml["total"];
         $colork = 'red';
     if ($rowpml["sudah"]-$targetk>=0) $colork='success';
      echo '<tr>
        <td><label class="label-result">'.$rowpml["pml"].'</label></td>
        <td class="right"><div class="'.$colork.'"><p>'.$rowpml["sudah"].'/'.$targetk.'</p></div></td>

      </tr>
      ';
     }
     ?>

        <tr>
          <td><div class="warning">
            <p>TOTAL</p>
          </div></td>
          <td><div class="warning">
            <p><?php echo $totalp; ?></p>
          </div></td>          
        </tr>
        </table>

    </fieldset>
  </form>

</div>

</body>

</html>