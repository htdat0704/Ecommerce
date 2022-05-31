<?php
session_start();
$con= mysqli_connect("localhost","root","","doan2");
mysqli_set_charset($con, 'UTF8');
$suane= $_GET['id'];
$day ="d";
$month ="m";
$year ="Y";

$day1 = date($day, time());
$month1 = date($month, time());
$year1 = date($year, time());

$updates= "update hoadon set trangthai = '0',ngay='$day1',thang='$month1',nam='$year1' where id='".$suane."'";
$conaa=mysqli_query($con,$updates);
header('location:luachongiohangkh.php')
?>