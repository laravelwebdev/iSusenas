<?php  
//action.php
$connect = mysqli_connect("localhost", "u770759286_susenas", "2=*YF=wd#Z", "u770759286_susenas");

$input = filter_input_array(INPUT_POST);

$nks = mysqli_real_escape_string($connect, $input['nks']);
$kab = mysqli_real_escape_string($connect, $input['kab']);
$status = mysqli_real_escape_string($connect, $input['status']);
$tanggal = mysqli_real_escape_string($connect, $input['tanggal']);
$tanggal = date("d-m-Y", strtotime($tanggal));

$query = "
 UPDATE updating 
 SET 
 statusk= '".$status."',
 tanggal= '".$tanggal."'
  WHERE nks = '".$nks."' 
 ";


mysqli_query($connect, $query);
echo "<script type='text/javascript'>alert('NKS $nks  berhasil diupdate'); window.location.replace('kumpul.php?kab=$kab');</script>";




?>