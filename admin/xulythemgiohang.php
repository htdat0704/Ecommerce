<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
$con= mysqli_connect("localhost","root","","doan2");
mysqli_set_charset($con, 'UTF8');

$day ="d";
$month ="m";
$year ="Y";

$day1 = date($day, time());
$month1 = date($month, time());
$year1 = date($year, time());


$sqladd= "INSERT INTO hoadon(iduser,trangthai,tongtien,ngay,thang,nam) VALUES ('".$_SESSION['idkh']."','4','0','$day1','$month1','$year1')";
$ketqua= mysqli_query($con,$sqladd);

header("location:luachongiohangkh.php")

?>