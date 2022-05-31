<?php
session_start();
$con= mysqli_connect("localhost","root","","doan2");
mysqli_set_charset($con, 'UTF8');

$user=$_GET['user'];
$_SESSION['idu']=$_GET['user'];
$mk=$_GET['mk'];
$ten=$_GET['ten'];
$dt=$_GET['dt'];
$diachi=$_GET['diachi'];
$date=$_GET['date'];
$email=$_GET['email'];
$admin="0";

$sql="INSERT INTO khachhang( username, password, hoten, dt, diachi, Email, ngaysinh, idadmin) VALUES('$user','$mk','$ten','$dt','$diachi','$email','$date','$admin')";
$ketqua=mysqli_query($con,$sql);

header("location:xulytaogiohangdk.php")

?>