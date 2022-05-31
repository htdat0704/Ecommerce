<?php 
session_start();
$_SESSION['idgh']=$_GET['id'];
header('location:../khachhang/demo.php');
?>