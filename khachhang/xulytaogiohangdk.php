<?php
session_start();
$con= mysqli_connect("localhost","root","","doan2");
mysqli_set_charset($con, 'UTF8');

$sql1 = " SELECT * from khachhang where username='".$_SESSION['idu']."'";		
$azz = mysqli_query($con,$sql1);
$rowax = mysqli_fetch_array($azz);


$sqladd= "INSERT INTO hoadon(iduser,trangthai,tongtien) VALUES ('".$rowax['id']."','4','0')";
$ketqua=mysqli_query($con,$sqladd);

header("location:dangnhap.php")

?>