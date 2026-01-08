<?php
/**
 * Monitoring cacah data export
 */

require_once '../../config/database.php';


    $conn = getDbConnection();
    $setRec = mysqli_query($conn, "SELECT prov, kab, nks, nus0324, statusc, p1c, p2c, p1p, p2p, p3p, p4p, p5p, p1k, p2k, p3k FROM cacah ORDER BY nks ASC, nus0324 + 0 ASC");
    
    $columnHeader = 
 "prov"."\t".
 "kab"."\t".
 "nks"."\t".
 "nus"."\t".
 "status"."\t".
 "cacah1"."\t".
 "cacah2"."\t".
 "periksa1"."\t".
 "periksa2"."\t".
 "periksa3"."\t".
 "periksa4"."\t".
 "periksa5"."\t".
 "kumpul1"."\t".
 "kumpul2"."\t".
 "kumpul3"."\t";

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
header("Content-Disposition: attachment; filename=sampel.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  

  echo ($columnHeader) . "\n" . $setData . "\n";  
 ?> 