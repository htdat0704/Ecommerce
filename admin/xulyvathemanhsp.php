<?php
session_start();
$con= mysqli_connect("localhost","root","","doan2");
mysqli_set_charset($con, 'UTF8');
$tensp= $_GET['ten'];
$dm=$_GET['dm'];
$th=$_GET['th'];
$qg=$_GET['qg'];
$gia=$_GET['gia'];
$sl=$_GET['soluong'];
$mtsp=$_GET['mtsp'];
$sqladd="INSERT INTO sanpham(tensp, gia, soluong, idth, iddm, idnuoc,mtsp) VALUES ('$tensp','$gia','$sl','$th','$dm','$qg','$mtsp')";
$conaa=mysqli_query($con,$sqladd);
$sqlcall="select * from sanpham where tensp='".$tensp."'";
$conaaa=mysqli_query($con,$sqlcall);
$rowidd=mysqli_fetch_array($conaaa);
$_SESSION['id']=$rowidd['id'];
header('location:themanhsp.php')
?>