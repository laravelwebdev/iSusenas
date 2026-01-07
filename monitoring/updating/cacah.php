<?php
/**
 * Monitoring updating cacah form
 */

require_once '../../config/database.php';

if (!isset($_GET['nks']) || !isset($_GET['nus'])) {
    header("Location:dcacah.php");
    exit;
}

$nks = sanitizeInput($_GET['nks']);
$nus = sanitizeInput($_GET['nus']);
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
  <form class="vue-form" action="a_cacah.php" method="post">
    <div class="error-message">
      <p>PROGRESS PEMUTAKHIRAN</p>
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
        <h4>Status Pemutakhiran</h4>
        <ul class="vue-form-list">
          <li>
            <input type="radio" name="statusc" id="radio-1" value="belum" required>
            <label for="radio-1">Belum</label>
          </li>
          <li>
            <input type="radio" name="statusc" id="radio-2" value="sudah" required>
            <label for="radio-2">Sudah</label>
          </li>
        </ul>
      </div>
      <div>
        <label class="label" for="p1c">Jumlah Keluarga Awal (Blok II Rincian 1)</label>
        <input type="number" onClick="this.select()"  name="p1c" id="p1c" required="" ref="p1c" min=0>
      </div>
      <div>
        <label class="label" for="p2c">Jumlah Keluarga hasil updating (Blok II Rincian 2)</label>
        <input type="number" onClick="this.select()"  name="p2c" id="p2c" required="" ref="p2c" min=0>
      </div>
      <div>
        <label class="label" for="p3c">Jumlah Ruta hasil updating (Blok II Rincian 3)</label>
        <input type="number" onClick="this.select()"  name="p3c" id="p3c" required="" ref="p3c" min=0>
      </div>

      <div>
          <input type="hidden" name="nama" value="<?php echo $_GET['nama'];?>">
      <input type="submit" name="submit" value="Kirim">
      </div>
      
    </fieldset>
  </form>

</div>
</body>

</html>