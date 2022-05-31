<?php
session_start();
$id = $_GET['id'];
$sp = $_SESSION['sppcm'];
$con=mysqli_connect("localhost","root","","doan2");
mysqli_set_charset($con, 'UTF8');
$sql= "DELETE FROM tbl_comment where comment_id='$id'";
mysqli_query($con,$sql );
$sql2= "DELETE FROM tbl_comment where parent_comment_id='$id'";
mysqli_query($con,$sql2 );
echo $sql2;
header('location:pages.php?id='.$sp.'')
?>