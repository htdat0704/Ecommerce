<?php
	session_start();
	$con_mess= $_POST["mess"];

	$id= $_POST["id"];

	$con=mysqli_connect("localhost","root","","doan2");
	mysqli_set_charset($con, 'UTF8');
	$sqladd="INSERT INTO binhluan(iduser,idsp,noidung) VALUES ('".$_SESSION['kh']."','$id','$con_mess')";
	$conaa=mysqli_query($con,$sqladd);


	echo $con_mess;
?>