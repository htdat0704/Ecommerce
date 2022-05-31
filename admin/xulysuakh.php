<?php
session_start();
$con= mysqli_connect("localhost","root","","doan2");
mysqli_set_charset($con, 'UTF8');
if(isset($_GET["hoten"]))
      {
          $sql1= "update khachhang set hoten = '" .$_GET["hoten"] ."' where id='".$_SESSION['id']."'";
          mysqli_query($con, $sql1);
      }
if(isset($_GET["user"]))
      {
          $sql1= "update khachhang set username = '" .$_GET["user"] ."' where id='".$_SESSION['id']."'";
          mysqli_query($con, $sql1);
      }
if(isset($_GET["mk"]))
      {
          $sql1= "update khachhang set password = '" .$_GET["mk"] ."' where id='".$_SESSION['id']."'";
          mysqli_query($con, $sql1);
      }
if(isset($_GET["date"]))
      {
          $sql1= "update khachhang set ngaysinh = '" .$_GET["date"] ."' where id='".$_SESSION['id']."'";
          mysqli_query($con, $sql1);
      }
if(isset($_GET["dienthoai"]))
      {
          $sql1= "update khachhang set dt = '" .$_GET["dt"] ."' where id='".$_SESSION['id']."'";
          mysqli_query($con, $sql1);
      }
if(isset($_GET["email"]))
      {
          $sql1= "update khachhang set email = '" .$_GET["email"] ."' where id='".$_SESSION['id']."'";
          mysqli_query($con, $sql1);
      }
if(isset($_GET["dc"]))
      {
          $sql1= "update khachhang set diachi = '" .$_GET["dc"] ."' where id='".$_SESSION['id']."'";
          mysqli_query($con, $sql1);
      }
      header("location:qlkh.php");
?>