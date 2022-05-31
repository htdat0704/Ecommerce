<?php
session_start();
$con= mysqli_connect("localhost","root","","doan2");
mysqli_set_charset($con, 'UTF8');
$tennc= $_GET['ten'];
$sqladd="INSERT INTO thuonghieu(tenth) VALUES ('".$tennc."')";
$conaa=mysqli_query($con,$sqladd);
header('location:qlha.php')
?>