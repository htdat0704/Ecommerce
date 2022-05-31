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

 		if(isset($_GET['sl7']))
        {
        	$sql1= "update hoadon set soluong7 = '".$_GET['sl7']."',ngay='$day1',thang='$month1',nam='$year1' where id='".$_SESSION['hoadonkh']."'";
         	 mysqli_query($con, $sql1);
        }
        if(isset($_GET['sl1']))
        {
        	$sql1= "update hoadon set soluong1 = '".$_GET['sl1']."',ngay='$day1',thang='$month1',nam='$year1' where id='".$_SESSION['hoadonkh']."'";
         	 mysqli_query($con, $sql1);
        }
        if(isset($_GET['sl2']))
        {
        	$sql1= "update hoadon set soluong2 = '".$_GET['sl2']."',ngay='$day1',thang='$month1',nam='$year1' where id='".$_SESSION['hoadonkh']."'";
         	 mysqli_query($con, $sql1);
        }
        if(isset($_GET['sl3']))
        {
        	$sql1= "update hoadon set soluong3 = '".$_GET['sl3']."',ngay='$day1',thang='$month1',nam='$year1' where id='".$_SESSION['hoadonkh']."'";
         	 mysqli_query($con, $sql1);
        }
        if(isset($_GET['sl4']))
        {
        	$sql1= "update hoadon set soluong4 = '".$_GET['sl4']."',ngay='$day1',thang='$month1',nam='$year1' where id='".$_SESSION['hoadonkh']."'";
         	 mysqli_query($con, $sql1);
        }
        if(isset($_GET['sl5']))
        {
        	$sql1= "update hoadon set soluong5 = '".$_GET['sl5']."',ngay='$day1',thang='$month1',nam='$year1' where id='".$_SESSION['hoadonkh']."'";
         	 mysqli_query($con, $sql1);
        }
        if(isset($_GET['sl6']))
        {
        	$sql1= "update hoadon set soluong6 = '".$_GET['sl6']."',ngay='$day1',thang='$month1',nam='$year1' where id='".$_SESSION['hoadonkh']."'";
         	 mysqli_query($con, $sql1);
        }
        if(isset($_GET['sl8']))
        {
        	$sql1= "update hoadon set soluong8 = '".$_GET['sl8']."',ngay='$day1',thang='$month1',nam='$year1' where id='".$_SESSION['hoadonkh']."'";
         	 mysqli_query($con, $sql1);
        }
        if(isset($_GET['sl9']))
        {
        	$sql1= "update hoadon set soluong9 = '".$_GET['sl9']."',ngay='$day1',thang='$month1',nam='$year1' where id='".$_SESSION['hoadonkh']."'";
         	 mysqli_query($con, $sql1);
        }
        if(isset($_GET['sl10']))
        {
        	$sql1= "update hoadon set soluong10 = '".$_GET['sl10']."',ngay='$day1',thang='$month1',nam='$year1' where id='".$_SESSION['hoadonkh']."'";
         	 mysqli_query($con, $sql1);
        }
header("location:ctkh.php?id=".$_SESSION['hoadonkh']);
?>