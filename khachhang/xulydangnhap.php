 <?php
	session_start();
	$con= mysqli_connect("localhost","root","","doan2");
	mysqli_set_charset($con, 'UTF8');
	$_SESSION['user']=$_GET['user'];
	$_SESSION['pass']=$_GET['pass'];
	$sql = " SELECT * from khachhang where username='".$_GET['user']."'";
	$abc= mysqli_query($con , $sql) ;
	$row= mysqli_fetch_array($abc) ;
	$_SESSION['admin']= $row['idadmin'];
	if(($_SESSION['user']==$row['username'])&&($_SESSION['pass']==$row['password']))
	{	
		$_SESSION['idkh'] = $row['id'];
		$_SESSION['hoten'] = $row['hoten'];
		header('location:demo.php');
	}
	else{

		header('location:dangnhap.php');
	}


?>