<?php  
//action.php

$connect = mysqli_connect("localhost", "u770759286_susenas", "2=*YF=wd#Z", "u770759286_susenas");

$input = filter_input_array(INPUT_POST);

$nks = mysqli_real_escape_string($connect, $input['nks']);
$nus = mysqli_real_escape_string($connect, $input['nus']);
$statusc = mysqli_real_escape_string($connect, $input['statusc']);
$p1c = mysqli_real_escape_string($connect, $input['p1c']);
$p2c = mysqli_real_escape_string($connect, $input['p2c']);
$p1p = mysqli_real_escape_string($connect, $input['p1p']);
$p2p = mysqli_real_escape_string($connect, $input['p2p']);
$p3p = mysqli_real_escape_string($connect, $input['p3p']);
$p4p = mysqli_real_escape_string($connect, $input['p4p']);
$p5p = mysqli_real_escape_string($connect, $input['p5p']);
$p1k = mysqli_real_escape_string($connect, $input['p1k']);
$p2k = mysqli_real_escape_string($connect, $input['p2k']);
$pendidikan = mysqli_real_escape_string($connect, $input['pendidikan']); 
$nus0324 = mysqli_real_escape_string($connect, $input['nus0324']); 
$krt0324 = mysqli_real_escape_string($connect, $input['krt0324']); 

$query = "
 UPDATE cacah 
 SET 
 statusc= '".$statusc."',
p1c = '".$p1c."',
p2c = '".$p2c."',
p1p = '".$p1p."',
p2p = '".$p2p."',
p3p = '".$p3p."',
p4p = '".$p4p."',
nus0324 = '".$nus0324."',
krt0324 = '".$krt0324."',
p5p = '".$p5p."',
p1k = '".$p1k."',
p2k = '".$p2k."',
 pendidikan= '".$pendidikan."'

 WHERE nks = '".$nks."' AND nus = '".$nus."'
 ";

mysqli_query($connect, $query);
echo "<script type='text/javascript'>alert('NKS $nks nomor sampel $nus berhasil diupdate'); window.location.replace('dcacah.php?nama=$input[nama]');</script>";




?>