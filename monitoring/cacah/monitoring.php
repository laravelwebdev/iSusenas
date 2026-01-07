<?php
/**
 * Monitoring cacah data export
 */

require_once '../../config/database.php';


    $conn = getDbConnection();
    $setRec = mysqli_query($conn, "SELECT * FROM cacah ORDER BY nks ASC, nus + 0 ASC");
    
    $columnHeader = '';
    $columnHeader = "id" . "\t" . "prov" . "\t" . "kab" . "\t" . "nks" . "\t" . "nus" . "\t" . 
                    "nus0324" . "\t" . "krt" . "\t" . "krt0324" . "\t" . "pcl" . "\t" . "pml" . "\t";
 "pendidikan"."\t".
 "cacah"."\t".
 "p1c"."\t".
 "p2c"."\t".
 "periksa"."\t".
 "p1p"."\t".
 "p2p"."\t".
 "p3p"."\t".
 "p4p"."\t".
 "p5p"."\t".
 "kirim"."\t".
 "p1k"."\t".
 "p2k"."\t".
 "p3k"."\t".
 "terima"."\t".
 "p1t"."\t".
 "data"."\t";

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