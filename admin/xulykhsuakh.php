<?php
session_start();
$con= mysqli_connect("localhost","root","","doan2");
mysqli_set_charset($con, 'UTF8');
if(isset($_GET["ten"]))
      {
          $sql1= "update khachhang set hoten = '" .$_GET["ten"] ."' where username='".$_SESSION['user']."'";
          mysqli_query($con, $sql1);
          header("location:giaodienkhachhang.php");
      }
if(isset($_GET["pass"]))
      {
          $sql1= "update khachhang set password = '" .$_GET["pass"] ."' where username='".$_SESSION['user']."'";
          mysqli_query($con, $sql1);
          header('location:dangxuat.php');
      }
if(isset($_GET["dt"]))
      {
          $sql1= "update khachhang set dt = '" .$_GET["dt"] ."' where username='".$_SESSION['user']."'";
          mysqli_query($con, $sql1);
          header("location:giaodienkhachhang.php");
      }
if(isset($_GET["date"]))
      {
          $sql1= "update khachhang set ngaysinh = '" .$_GET["date"] ."' where username='".$_SESSION['user']."'";
          mysqli_query($con, $sql1);
          header("location:giaodienkhachhang.php");
      }
if(isset($_GET["diachi"]))
      {
          $sql1= "update khachhang set diachi = '" .$_GET["diachi"] ."' where username='".$_SESSION['user']."'";
          mysqli_query($con, $sql1);
          header("location:giaodienkhachhang.php");
      }
if(isset($_GET["email"]))
      {
          $sql1= "update khachhang set Email = '" .$_GET["email"] ."' where username='".$_SESSION['user']."'";;
          mysqli_query($con, $sql1);
          header("location:giaodienkhachhang.php");
      }
if(isset($_GET["dc"]))
      {
          $sql1= "update khachhang set diachi = '" .$_GET["dc"] ."' where username='".$_SESSION['user']."'";
          mysqli_query($con, $sql1);
          header("location:giaodienkhachhang.php");
      }
      
?>