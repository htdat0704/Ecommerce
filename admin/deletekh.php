<?php
session_start();
$con= mysqli_connect("localhost","root","","doan2");
mysqli_set_charset($con, 'UTF8');
$xoane= $_GET['id'];
$delet="DELETE FROM khachhang WHERE id=".$xoane;
$conaa=mysqli_query($con,$delet);
header('location:qlkh.php')
?>