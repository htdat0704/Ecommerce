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

if(empty($_SESSION['user']))
{
	header('location:dangnhap.php');
}
else if(empty($_SESSION['idgh']))
{
	header('location:../admin/luachongiohangkh.php');
}
else
{
	$abv= "SELECT * from hoadon where id=".$_SESSION['idgh'];
	$lol =  mysqli_query($con,$abv);
	$dongg = mysqli_fetch_array($lol);
	if(empty($dongg['idsp1']))
	{
		$add= "UPDATE hoadon set idsp1='".$_GET["id"]."' where id='".$_SESSION['idgh']."'";
		$aaddd= mysqli_query($con,$add);
		$adds= "UPDATE hoadon set soluong1='1',ngay='$day1',thang='$month1',nam='$year1' where id='".$_SESSION['idgh']."'";
		$addda= mysqli_query($con,$adds);
		
		header('location:../admin/ctkh.php?id='.$_SESSION['idgh']);

	}
	else if(empty($dongg['idsp2']))
	{
		$add= "UPDATE hoadon set idsp2='".$_GET["id"]."' where id='".$_SESSION['idgh']."'";
		$aaddd= mysqli_query($con,$add);
		$adds= "UPDATE hoadon set soluong2='1',ngay='$day1',thang='$month1',nam='$year1' where id='".$_SESSION['idgh']."'";
		$addda= mysqli_query($con,$adds);
		header('location:../admin/ctkh.php?id='.$_SESSION['idgh']);
	}
	else if(empty($dongg['idsp3']))
	{
		$add= "UPDATE hoadon set idsp3='".$_GET["id"]."' where id='".$_SESSION['idgh']."'";
		$aaddd= mysqli_query($con,$add);
		$adds= "UPDATE hoadon set soluong3='1',ngay='$day1',thang='$month1',nam='$year1' where id='".$_SESSION['idgh']."'";
		$addda= mysqli_query($con,$adds);
		header('location:../admin/ctkh.php?id='.$_SESSION['idgh']);
	}
	else if(empty($dongg['idsp4']))
	{
		$add= "UPDATE hoadon set idsp4='".$_GET["id"]."' where id='".$_SESSION['idgh']."'";
		$aaddd= mysqli_query($con,$add);
		$adds= "UPDATE hoadon set soluong4='1',ngay='$day1',thang='$month1',nam='$year1' where id='".$_SESSION['idgh']."'";
		$addda= mysqli_query($con,$adds);
		header('location:../admin/ctkh.php?id='.$_SESSION['idgh']);
	}
	else if(empty($dongg['idsp5']))
	{
		$add= "UPDATE hoadon set idsp5='".$_GET["id"]."' where id='".$_SESSION['idgh']."'";
		$aaddd= mysqli_query($con,$add);
		$adds= "UPDATE hoadon set soluong5='1',ngay='$day1',thang='$month1',nam='$year1' where id='".$_SESSION['idgh']."'";
		$addda= mysqli_query($con,$adds);
		header('location:../admin/ctkh.php?id='.$_SESSION['idgh']);
	}
	else if(empty($dongg['idsp6']))
	{
		$add= "UPDATE hoadon set idsp6='".$_GET["id"]."' where id='".$_SESSION['idgh']."'";
		$aaddd= mysqli_query($con,$add);
		$adds= "UPDATE hoadon set soluong6='1',ngay='$day1',thang='$month1',nam='$year1' where id='".$_SESSION['idgh']."'";
		$addda= mysqli_query($con,$adds);
		header('location:../admin/ctkh.php?id='.$_SESSION['idgh']);
	}
	else if(empty($dongg['idsp7']))
	{
		$add= "UPDATE hoadon set idsp7='".$_GET["id"]."' where id='".$_SESSION['idgh']."'";
		$aaddd= mysqli_query($con,$add);
		$adds= "UPDATE hoadon set soluong7='1',ngay='$day1',thang='$month1',nam='$year1' where id='".$_SESSION['idgh']."'";
		$addda= mysqli_query($con,$adds);
		header('location:../admin/ctkh.php?id='.$_SESSION['idgh']);
	}
	else if(empty($dongg['idsp8']))
	{
		$add= "UPDATE hoadon set idsp8='".$_GET["id"]."' where id='".$_SESSION['idgh']."'";
		$aaddd= mysqli_query($con,$add);
		$adds= "UPDATE hoadon set soluong8='1',ngay='$day1',thang='$month1',nam='$year1' where id='".$_SESSION['idgh']."'";
		$addda= mysqli_query($con,$adds);
		header('location:../admin/ctkh.php?id='.$_SESSION['idgh']);
	}
	else if(empty($dongg['idsp9']))
	{
		$add= "UPDATE hoadon set idsp9='".$_GET["id"]."' where id='".$_SESSION['idgh']."'";
		$aaddd= mysqli_query($con,$add);
		$adds= "UPDATE hoadon set soluong9='1',ngay='$day1',thang='$month1',nam='$year1' where id='".$_SESSION['idgh']."'";
		$addda= mysqli_query($con,$adds);
		header('location:../admin/ctkh.php?id='.$_SESSION['idgh']);
	}
	else if(empty($dongg['idsp10']))
	{
		$add= "UPDATE hoadon set idsp10='".$_GET["id"]."' where id='".$_SESSION['idgh']."'";
		$aaddd= mysqli_query($con,$add);
		$adds= "UPDATE hoadon set soluong10='1',ngay='$day1',thang='$month1',nam='$year1' where id='".$_SESSION['idgh']."'";
		$addda= mysqli_query($con,$adds);
		header('location:../admin/ctkh.php?id='.$_SESSION['idgh']);
	}
	else 
	{
		header('location:../admin/luachongiohangkh.php');
	}
}



