<?php
/**
 * Monitoring updating data export
 */

require_once '../../config/database.php';

    $conn = getDbConnection();
    $setRec = mysqli_query($conn, "SELECT prov, kab, nks, statusc, p1c, p2c, p3c FROM updating ORDER BY nks ASC");
    
    $columnHeader = '';
    $columnHeader = "prov" . "\t" . "kab" . "\t" . "nks" . "\t" . "status" . "\t" . "p1c" . "\t" . "p2c" . "\t" . "p3c" . "\t";
    
    $setData = '';  
  while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=mon_updating.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  

  echo ($columnHeader) . "\n" . $setData . "\n";  
 ?> 