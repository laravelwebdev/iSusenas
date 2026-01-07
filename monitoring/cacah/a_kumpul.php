<?php  
//action.php
$connect = mysqli_connect("localhost", "u770759286_susenas", "2=*YF=wd#Z", "u770759286_susenas");

$input = filter_input_array(INPUT_POST);

$nks = mysqli_real_escape_string($connect, $input['nks']);
$nus = mysqli_real_escape_string($connect, $input['nus']);
$status = mysqli_real_escape_string($connect, $input['status']);
$tanggal = mysqli_real_escape_string($connect, $input['tanggal']);
$tanggal = date("d-m-Y", strtotime($tanggal));

$query = "
 UPDATE cacah 
 SET 
 statusk= '".$status."',
 statust= '".$status."',
 p1t= '".$tanggal."',
 p3k= '".$tanggal."',
 statusp= '".$status."'
  WHERE nks = '".$nks."' AND nus = '".$nus."'
 ";


mysqli_query($connect, $query);
echo "<script type='text/javascript'>alert('NKS $nks nomor sampel $nus berhasil diupdate'); window.location.replace('kumpul.php?nks=$nks');</script>";




?>