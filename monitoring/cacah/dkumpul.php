<?php
if (!isset($_GET['nks']) || !isset($_GET['nus'])) {
header("Location:kumpul.php");
}
?>

<!DOCTYPE html>
<html lang='en' class=''>

<head>
  <meta charset='UTF-8'>
  <title>PROGRESS</title>
  <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
  <meta content="utf-8" http-equiv="encoding">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">  
</head>

<body>
  <div id="app">
  <form class="vue-form" action="a_kumpul.php" method="post">
    <div class="error-message">
      <p>PEMASUKAN DOKUMEN</p>
    </div>
        <br>
    <br>
      <div class="success">
        <p>Pencacahan</p>
      </div>
    <fieldset>

           <div>
        <h4>NKS</h4>
        <p class="select">
          <select class="budget" name="nks">
                <?php

      echo '<option value="'.$_GET['nks'].'">'.$_GET['nks'].'</option>';
     ?>
		</select>
        </p>
      </div>

      <div>
        <h4>Nomor Urut Sampel</h4>
        <p class="select">
          <select class="budget"  name="nus">
                <?php
      echo '<option value="'.$_GET['nus'].'">'.$_GET['nus'].'</option>';
     ?>
					</select>
        </p>
      </div>

      <div>
        <h4>Status Pemasukan</h4>
        <ul class="vue-form-list">
          <li>
            <input type="radio" name="status" id="radio-1" value="belum" required>
            <label for="radio-1">Belum</label>
          </li>
          <li>
            <input type="radio" name="status" id="radio-2" value="sudah" required>
            <label for="radio-2">Sudah</label>
          </li>
        </ul>
        <div>
        <label class="label" for="tanggal">Tanggal Pemasukan Dokumen</label>
        <input style="font-size: 22.5pt" type="date"  name="tanggal" id="tanggal" required="" ref="tanggal">
      </div>
      </div>
      <div>
      <input type="submit" name="submit" value="Kirim">
      </div>
      
    </fieldset>
  </form>

</div>
</body>

</html>