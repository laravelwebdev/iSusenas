<?php
/**
 * Kumpul list view
 */

require_once '../../config/database.php';

try {
    $conn = getDbConnection();
    
    $qselect = "SELECT DISTINCT nks FROM cacah WHERE statusc='sudah' ORDER BY nks ASC";
    $rselect = mysqli_query($conn, $qselect);
    
    if (isset($_POST['token'])) {
        $nks = sanitizeInput($_POST['nks']);
        
        $query = "SELECT nus, statusk FROM cacah WHERE statusc='sudah' AND nks = ? ORDER BY nus + 0 ASC";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, 's', $nks);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);  
$selected='';

}

if (isset($_GET['nks'])) {
$nks = mysqli_real_escape_string($connect, $_GET['nks']);
$query = "SELECT nus, statusk FROM cacah where statusc='sudah' and nks='".$nks."' ORDER by nus + 0 ASC";
$result = mysqli_query($connect, $query);  
$selected='';

}

?>

<!DOCTYPE html>
<html lang='en' class=''>

<head>
  <meta charset='UTF-8'>
  <title>Progress Pengumpulan</title>
  <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
  <meta content="utf-8" http-equiv="encoding">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">  
</head>

<body>
  <div id="app">
   <form class="vue-form" action="kumpul.php" method="post">
    <div class="blue-message">
      <p>PROGRESS PENGUMPULAN</p>
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
          <select class="budget" name="nks" onchange="change(this)">
                <?php
                while($data = mysqli_fetch_array($rselect))
                {
                    if ($nks === $data['nks'] || $data['nks']  === $_GET['nks']) 
                    {
                        $selected=' selected';
                        
                    } else $selected='';
                     echo '<option value="'.$data['nks'].'"' .$selected.'>'.$data['nks'].'</option>';
                }

     
     ?>
		</select>
        </p>
      
      </div>
        <input type="hidden" name="token" value="token">
    <div>
      <input type="submit" name="submit" value="Lihat">
      </div>
      <div id="block">
      <?php
  if (isset($_POST['token']) || isset($_GET['nks']) ) {   
      echo 

    '<table>
      <tr>
        <td><div class="success">
          <p>NUS</p>
        </div></td>
        <td><div class="success">
          <p>Status</p>
        </div></td>
        <td><div class="success">
          <p>Update</p>
        </div></td>
      </tr>';
     while($row = mysqli_fetch_array($result))
     {

      echo '<tr>
        <td><label class="label-result">'.$row["nus"].'</label></td>
        <td><label class="label-result">'.$row["statusk"].'</label></td>
        <td><div class="blue">
          <p><a href="dkumpul.php?nks='.$nks.'&nus='.$row["nus"].'">Update</a></p>
        </div></td>
      </tr>
      ';
     }
      echo '</table>';
     }
  ?>
  </div>
    </fieldset>
  </form>

</div>

<script>
    function change(obj) {


    var selectBox = obj;
    var selected = selectBox.options[selectBox.selectedIndex].value;
    var textarea = document.getElementById("block");

    if(selected === '1'){
        textarea.style.display = "block";
    }
    else{
        textarea.style.display = "none";
    }
}
</script>

</body>

</html>