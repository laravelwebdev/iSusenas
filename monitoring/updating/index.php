<?php
date_default_timezone_set('Asia/Makassar');
$connect = mysqli_connect("localhost", "u770759286_susenas", "2=*YF=wd#Z", "u770759286_susenas");
$query = "SELECT pcl, SUM(CASE WHEN statusc='sudah' THEN 1 ELSE 0 END) AS sudah, count(statusc) as total from updating GROUP BY pcl ORDER BY sudah DESC";
$result = mysqli_query($connect, $query);

$qtotal = "Select prov from updating where statusc='sudah'";
$rtotal = mysqli_query($connect, $qtotal);
$total=mysqli_num_rows($rtotal);

$qtotalp = "Select prov from updating where statusk='sudah'";
$rtotalp = mysqli_query($connect, $qtotalp);
$totalp=mysqli_num_rows($rtotalp);


// $qpml = "SELECT pml, SUM(CASE WHEN statusk='sudah' THEN 1 ELSE 0 END) AS sudah, count(statusk) as total from updating GROUP BY pml ORDER BY sudah DESC";
// $rpml = mysqli_query($connect, $qpml);

// $cacah = array(
// 0,
// 0,
// 0,
// 0,
// 0,
// 0,
// 0,
// 0,
// 1,
// 1,
// 1,
// 2,
// 2,
// 2,
// 2,
// 2,
// 2,
// 2,
// 2,
// 2,
// 2,
// 2,
// 2,
// 2,
// 2,
// 2,
// 2,
// 2,
// 2,
// 2,
// 2
// );
// $kpml = array(
// 0,
// 0,
// 0,
// 0,
// 0,
// 0,
// 0,
// 0,
// 0,
// 1,
// 1,
// 1,
// 2,
// 2,
// 2,
// 2,
// 2,
// 2,
// 2,
// 2,
// 2,
// 2,
// 2,
// 2,
// 2,
// 2,
// 2,
// 2,
// 2,
// 2,
// 2
// );
    

    
// $kumpul = array(
// 0,
// 0,
// 0,
// 0,
// 0,
// 0,
// 0,
// 0,
// 0,
// 2,
// 2,
// 2,
// 4,
// 4,
// 4,
// 4,
// 4,
// 4,
// 4,
// 4,
// 4,
// 4,
// 4,
// 4,
// 4,
// 4,
// 4,
// 4,
// 4,
// 4,
// 4
// );
    
    
    
    
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
        <!--<td class="td-small"><div class="success">-->
        <!--  <p>Kumpul</p>-->
        <!--</div></td>-->
        <td><div class="success">
          <p>Detail</p>
        </div></td>
      </tr>
      <?php
           while($row = mysqli_fetch_array($result))
     {
    //     $targetc=$cacah[idate('d')-1];
    //     $targetkpml=$kpml[idate('d')-1];
         
    //      if($targetc > $row["total"]) $targetc = $row["total"];
    //      if($targetkpml > $row["total"]) $targetkpml = $row["total"];
    //      $colorc = 'red';
    //   if ($row["sudah"]-$targetc>=0) $colorc='success';
      
      echo '<tr>
        <td colspan="2"><label class="label-result">'.$row["pcl"].'</label></td>
        <td><div class="blue"><p>'.$row["sudah"].'</p></div></td>
        <td><div class="blue">
          <p><a href="dcacah.php?nama='.$row["pcl"].'">Detail</a></p>
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

      <!--<div class="warning">-->
      <!--  <p>Pemasukan Dokumen</p>-->
      <!--</div>-->

      <!--<table>-->
      <!--  <tr>-->
      <!--    <td><div class="warning">-->
      <!--      <p>Nama PML</p>-->
      <!--    </div></td>-->
      <!--    <td><div class="warning">-->
      <!--      <p>Jumlah</p>-->
      <!--    </div></td>          -->
      <!--  </tr>-->
      <?php
    //       while($rowpml = mysqli_fetch_array($rpml))
    //  {
    //     $targetk=$kumpul[idate('d')-1];
    //      if($targetk > $rowpml["total"]) $targetk = $rowpml["total"];
    //      $colork = 'red';
    //  if ($rowpml["sudah"]-$targetk>=0) $colork='success';
    //   echo '<tr>
    //     <td><label class="label-result">'.$rowpml["pml"].'</label></td>
    //     <td class="right"><div class="'.$colork.'"><p>'.$rowpml["sudah"].'/'.$targetk.'</p></div></td>

    //   </tr>
    //   ';
    //  }
     ?>

<!--        <tr>-->
<!--          <td><div class="warning">-->
<!--            <p>TOTAL</p>-->
<!--          </div></td>-->
<!--          <td><div class="warning">-->
<!--            <p><?php echo $totalp; ?></p>-->
<!--          </div></td>          -->
<!--        </tr>-->
<!--        </table>-->

<!--    </fieldset>-->
<!--  </form>-->

<!--</div>-->

</body>

</html>