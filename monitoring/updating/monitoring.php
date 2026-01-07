<?php  
$connect = mysqli_connect("localhost", "u770759286_susenas", "2=*YF=wd#Z", "u770759286_susenas");
$setRec = mysqli_query($connect,"select prov,kab,nks,statusc,p1c,p2c,p3c
 from updating ORDER BY nks ASC");
$columnHeader = '';  
$columnHeader =  
 "prov"."\t".
 "kab"."\t".
 "nks"."\t".
 "status"."\t".
 "p1c"."\t".
 "p2c"."\t".
 "p3c"."\t";

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