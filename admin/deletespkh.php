<?php
session_start();
$con= mysqli_connect("localhost","root","","doan2");
mysqli_set_charset($con, 'UTF8');
	if(isset($_GET["idsp1"]))
      {
          $sql1= "update hoadon set idsp1 = '0' where id='".$_SESSION['hoadonkh']."'";
          mysqli_query($con, $sql1);
      }
      if(isset($_GET["idsp2"]))
      {
          $sql1= "update hoadon set idsp2 = '0' where id='".$_SESSION['hoadonkh']."'";
          mysqli_query($con, $sql1);
      }
      if(isset($_GET["idsp3"]))
      {
          $sql1= "update hoadon set idsp3 = '0' where id='".$_SESSION['hoadonkh']."'";
          mysqli_query($con, $sql1);
      }
      if(isset($_GET["idsp4"]))
      {
          $sql1= "update hoadon set idsp4 = '0' where id='".$_SESSION['hoadonkh']."'";
          mysqli_query($con, $sql1);
      }
      if(isset($_GET["idsp5"]))
      {
          $sql1= "update hoadon set idsp5 = '0' where id='".$_SESSION['hoadonkh']."'";
          mysqli_query($con, $sql1);
      }
      if(isset($_GET["idsp6"]))
      {
          $sql1= "update hoadon set idsp6 = '0' where id='".$_SESSION['hoadonkh']."'";
          mysqli_query($con, $sql1);
      }
      if(isset($_GET["idsp7"]))
      {
          $sql1= "update hoadon set idsp7 = '0' where id='".$_SESSION['hoadonkh']."'";
          mysqli_query($con, $sql1);
      }
      if(isset($_GET["idsp8"]))
      {
          $sql1= "update hoadon set idsp8 = '0' where id='".$_SESSION['hoadonkh']."'";
          mysqli_query($con, $sql1);
      }
      if(isset($_GET["idsp9"]))
      {
          $sql1= "update hoadon set idsp9 = '0' where id='".$_SESSION['hoadonkh']."'";
          mysqli_query($con, $sql1);
      }
      if(isset($_GET["idsp10"]))
      {
          $sql1= "update hoadon set idsp10 = '0' where id='".$_SESSION['hoadonkh']."'";
          mysqli_query($con, $sql1);
      }
      header("location:ctkh.php?id=".$_SESSION['hoadonkh']);
?>