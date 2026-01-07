<?php  
//action.php
$connect = mysqli_connect("localhost", "u770759286_susenas", "2=*YF=wd#Z", "u770759286_susenas");

$input = filter_input_array(INPUT_POST);

$nks = mysqli_real_escape_string($connect, $input['nks']);
$statusc = mysqli_real_escape_string($connect, $input['statusc']);
$p1c = mysqli_real_escape_string($connect, $input['p1c']);
$p2c = mysqli_real_escape_string($connect, $input['p2c']);
$p3c = mysqli_real_escape_string($connect, $input['p3c']);

$query = "
 UPDATE updating 
 SET 
 statusc= '".$statusc."',
 p1c= '".$p1c."',
 p2c= '".$p2c."',
 p3c= '".$p3c."'
 
 WHERE nks = '".$nks."'
 ";


mysqli_query($connect, $query);
echo "<script type='text/javascript'>alert('NKS $nks berhasil diupdate'); window.location.replace('dcacah.php?nama=$input[nama]');</script>";




?>