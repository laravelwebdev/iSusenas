<?php
$connect = mysqli_connect("localhost", "u770759286_susenas", "2=*YF=wd#Z", "u770759286_susenas");
    $nks = $_POST['nks'];
	$nus = $_POST['nus'];
	$data = json_encode($_POST);
 
	$sql = 
	 "UPDATE cacah 
 SET 
 data= '".$data."'
 
 WHERE nks = '".$nks."' AND nus = '".$nus."'
 ";
    mysqli_query($connect, $sql);
    
    echo "<script type='text/javascript'>alert('NKS $nks nomor sampel $nus berhasil simpan'); document.referrer ? window.location = document.referrer : history.back();</script>";

?>