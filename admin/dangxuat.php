<?php
session_start();
session_destroy();
unset($_SESSION['user']);
unset($_SESSION['pass']);
unset($_SESSION['admin']);
header("location:../khachhang/dangnhap.php");
?>