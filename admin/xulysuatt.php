<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
$con= mysqli_connect("localhost","root","","doan2");
mysqli_set_charset($con, 'UTF8');
$tt=$_GET["tt"];
$sql1= "update hoadon set trangthai = '" .$_GET["tt"] ."' where id='".$_SESSION['hoadon']."'";
$conaa=   mysqli_query($con, $sql1);
		$day ="d";
		$month ="m";
		$year ="Y";

		$day1 = date($day, time());
		$month1 = date($month, time());
		$year1 = date($year, time());
if(($tt==1)||($tt==0)||($tt==3))
{
	$sql1= "update hoadon set trangthai = '" .$_GET["tt"] ."' where id='".$_SESSION['hoadon']."'";
	$conaa=   mysqli_query($con, $sql1);
	header('location:giaodienadmin.php');
}
if($tt==2)
{
	$sql1= "update hoadon set trangthai = '" .$_GET["tt"] ."',ngay='$day1',thang='$month1',nam='$year1' where id='".$_SESSION['hoadon']."'";
	$conaa=   mysqli_query($con, $sql1);


	$kh= "SELECT * FROM hoadon where id=".$_SESSION['hoadon'];
	$a1= mysqli_query($con,$kh);
	$rowhd= mysqli_fetch_array($a1);

	$sp1 = "SELECT * from sanpham where id=".$rowhd['idsp1'];
	$s1 = mysqli_query($con,$sp1);
	$row1 = mysqli_fetch_array($s1);

	$slcl1 = $row1['soluong']-$rowhd['soluong1'];	
	$sql11= "update sanpham set soluong = '$slcl1' where id=".$rowhd['idsp1'];
	$conaaa= mysqli_query($con, $sql11);

	if(is_null($rowhd['idsp2']))
	{
		header('location:giaodienadmin.php');
	}
	else
	{
	$sp1 = "SELECT * from sanpham where id=".$rowhd['idsp2'];
	$s1 = mysqli_query($con,$sp1);
	$row1 = mysqli_fetch_array($s1);

	$conlai = $row1['soluong']-$rowhd['soluong2'];	
	$sql11= "update sanpham set soluong = '$conlai' where id=".$rowhd['idsp2'];
	$conaaa= mysqli_query($con, $sql11);
	}
	if(is_null($rowhd['idsp3']))
	{
		header('location:giaodienadmin.php');
	}
	else
	{
	$sp1 = "SELECT * from sanpham where id=".$rowhd['idsp3'];
	$s1 = mysqli_query($con,$sp1);
	$row1 = mysqli_fetch_array($s1);

	$conlai = $row1['soluong']-$rowhd['soluong3'];	
	$sql11= "update sanpham set soluong = '$conlai' where id=".$rowhd['idsp3'];
	$conaaa= mysqli_query($con, $sql11);
	}
	if(is_null($rowhd['idsp4']))
	{
		header('location:giaodienadmin.php');
	}
	else
	{
	$sp1 = "SELECT * from sanpham where id=".$rowhd['idsp4'];
	$s1 = mysqli_query($con,$sp1);
	$row1 = mysqli_fetch_array($s1);

	$conlai = $row1['soluong']-$rowhd['soluong4'];	
	$sql11= "update sanpham set soluong = '$conlai' where id=".$rowhd['idsp4'];
	$conaaa= mysqli_query($con, $sql11);
	}
	if(is_null($rowhd['idsp5']))
	{
		header('location:giaodienadmin.php');
	}
	else
	{
	$sp1 = "SELECT * from sanpham where id=".$rowhd['idsp5'];
	$s1 = mysqli_query($con,$sp1);
	$row1 = mysqli_fetch_array($s1);

	$conlai = $row1['soluong']-$rowhd['soluong5'];	
	$sql11= "update sanpham set soluong = '$conlai' where id=".$rowhd['idsp5'];
	$conaaa= mysqli_query($con, $sql11);
	}
	if(is_null($rowhd['idsp6']))
	{
		header('location:giaodienadmin.php');
	}
	else
	{
	$sp1 = "SELECT * from sanpham where id=".$rowhd['idsp6'];
	$s1 = mysqli_query($con,$sp1);
	$row1 = mysqli_fetch_array($s1);

	$conlai = $row1['soluong']-$rowhd['soluong6'];	
	$sql11= "update sanpham set soluong = '$conlai' where id=".$rowhd['idsp6'];
	$conaaa= mysqli_query($con, $sql11);
	}
	if(is_null($rowhd['idsp7']))
	{
		header('location:giaodienadmin.php');
	}
	else
	{
	$sp1 = "SELECT * from sanpham where id=".$rowhd['idsp7'];
	$s1 = mysqli_query($con,$sp1);
	$row1 = mysqli_fetch_array($s1);

	$conlai = $row1['soluong']-$rowhd['soluong7'];	
	$sql11= "update sanpham set soluong = '$conlai' where id=".$rowhd['idsp7'];
	$conaaa= mysqli_query($con, $sql11);
	}
	if(is_null($rowhd['idsp8']))
	{
		header('location:giaodienadmin.php');
	}
	else
	{
	$sp1 = "SELECT * from sanpham where id=".$rowhd['idsp8'];
	$s1 = mysqli_query($con,$sp1);
	$row1 = mysqli_fetch_array($s1);

	$conlai = $row1['soluong']-$rowhd['soluong8'];	
	$sql11= "update sanpham set soluong = '$conlai' where id=".$rowhd['idsp8'];
	$conaaa= mysqli_query($con, $sql11);
	}
	if(is_null($rowhd['idsp9']))
	{
		header('location:giaodienadmin.php');
	}
	else
	{
	$sp1 = "SELECT * from sanpham where id=".$rowhd['idsp9'];
	$s1 = mysqli_query($con,$sp1);
	$row1 = mysqli_fetch_array($s1);

	$conlai = $row1['soluong']-$rowhd['soluong9'];	
	$sql11= "update sanpham set soluong = '$conlai' where id=".$rowhd['idsp9'];
	$conaaa= mysqli_query($con, $sql11);
	}
	if(is_null($rowhd['idsp10']))
	{
		header('location:giaodienadmin.php');
	}
	else
	{
	$sp1 = "SELECT * from sanpham where id=".$rowhd['idsp10'];
	$s1 = mysqli_query($con,$sp1);
	$row1 = mysqli_fetch_array($s1);

	$conlai = $row1['soluong']-$rowhd['soluong10'];	
	$sql11= "update sanpham set soluong = '$conlai' where id=".$rowhd['idsp10'];
	$conaaa= mysqli_query($con, $sql11);
	header('location:giaodienadmin.php');
	}
	
}
?>