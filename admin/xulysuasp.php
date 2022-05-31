<?php
session_start();
$con= mysqli_connect("localhost","root","","doan2");
mysqli_set_charset($con, 'UTF8');
if(isset($_GET["sp"]))
      {
          $sql1= "update sanpham set tensp = '" .$_GET["sp"] ."' where id='".$_SESSION['id']."'";
          mysqli_query($con, $sql1);
      }
if(isset($_GET["mtsp"]))
      {
          $sql1= "update sanpham set mtsp = '" .$_GET["mtsp"] ."' where id='".$_SESSION['id']."'";
          mysqli_query($con, $sql1);
      }
if(isset($_GET["gia"]))
      {
          $sql1= "update sanpham set gia = '" .$_GET["gia"] ."' where id='".$_SESSION['id']."'";
          mysqli_query($con, $sql1);
      }
if(isset($_GET["sl"]))
      {
          $sql1= "update sanpham set soluong = '" .$_GET["sl"] ."' where id='".$_SESSION['id']."'";
          mysqli_query($con, $sql1);
      }
if(isset($_GET["dm"]))
      {
          $sql1= "update sanpham set iddm = '" .$_GET["dm"] ."' where id='".$_SESSION['id']."'";
          mysqli_query($con, $sql1);
      }
if(isset($_GET["th"]))
      {
          $sql1= "update sanpham set idth = '" .$_GET["th"] ."' where id='".$_SESSION['id']."'";
          mysqli_query($con, $sql1);
      }
if(isset($_GET["nuoc"]))
      {
          $sql1= "update sanpham set idnuoc = '" .$_GET["nuoc"] ."' where id='".$_SESSION['id']."'";
          mysqli_query($con, $sql1);
      }

      header("location:qlsp.php");
?>